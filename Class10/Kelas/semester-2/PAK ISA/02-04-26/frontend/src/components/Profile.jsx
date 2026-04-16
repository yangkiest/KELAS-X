import React, { useEffect, useState } from 'react';
import axios from 'axios';
import { Link } from 'react-router-dom';

const Profile = () => {
  const [careers, setCareers] = useState([]);
  const [editing, setEditing] = useState(null);
  const [form, setForm] = useState({ title: '', description: '', career_date: '' });
  const [authorized, setAuthorized] = useState(true);
  const token = localStorage.getItem('token');

  useEffect(() => {
    if (token) {
      fetchCareers();
    } else {
      setAuthorized(false);
    }
  }, [token]);

  const fetchCareers = async () => {
    try {
      const response = await axios.get('/api/careers', {
        headers: { Authorization: `Bearer ${token}` }
      });
      setCareers(response.data);
    } catch (error) {
      setAuthorized(false);
    }
  };

  const handleEdit = (career) => {
    setEditing(career.id);
    setForm({ title: career.title, description: career.description, career_date: career.career_date });
  };

  const handleSave = async () => {
    if (!token) {
      setAuthorized(false);
      return;
    }

    if (editing) {
      await axios.put(`/api/careers/${editing}`, form, {
        headers: { Authorization: `Bearer ${token}` }
      });
    } else {
      await axios.post('/api/careers', form, {
        headers: { Authorization: `Bearer ${token}` }
      });
    }
    setEditing(null);
    setForm({ title: '', description: '', career_date: '' });
    fetchCareers();
  };

  const handleDelete = async (id) => {
    if (!token) {
      setAuthorized(false);
      return;
    }

    await axios.delete(`/api/careers/${id}`, {
      headers: { Authorization: `Bearer ${token}` }
    });
    fetchCareers();
  };

  if (!authorized) {
    return (
      <div className="auth-popup-overlay">
        <div className="auth-popup">
          <h2>Silakan login dulu</h2>
          <p>Untuk mengedit timeline karir, kamu harus masuk dulu.</p>
          <div className="button-group">
            <Link className="button button-primary" to="/login">Login</Link>
            <Link className="button button-secondary" to="/register">Register</Link>
          </div>
        </div>
      </div>
    );
  }

  return (
    <div className="profile page-content">
      <div className="page-header">
        <span className="eyebrow">Edit</span>
        <h2>Ubah Timeline Karir</h2>
        <p>Tambahkan, edit, atau hapus milestone karir dengan mudah.</p>
      </div>

      <div className="form edit-form">
        <input
          type="text"
          placeholder="Judul milestone"
          value={form.title}
          onChange={(e) => setForm({ ...form, title: e.target.value })}
        />
        <textarea
          placeholder="Deskripsi singkat"
          value={form.description}
          onChange={(e) => setForm({ ...form, description: e.target.value })}
        />
        <input
          type="date"
          value={form.career_date}
          onChange={(e) => setForm({ ...form, career_date: e.target.value })}
        />
        <div className="button-group">
          <button className="button button-primary" onClick={handleSave}>{editing ? 'Update' : 'Tambah'}</button>
          {editing && <button className="button button-secondary" onClick={() => setEditing(null)}>Batal</button>}
        </div>
      </div>

      <ul className="career-list">
        {careers.map(career => (
          <li key={career.id} className="career-card">
            <div>
              <h3>{career.title}</h3>
              <p>{career.description}</p>
            </div>
            <div className="career-actions">
              <span className="career-date">{career.career_date}</span>
              <div>
                <button className="button button-secondary" onClick={() => handleEdit(career)}>Edit</button>
                <button className="button button-danger" onClick={() => handleDelete(career.id)}>Delete</button>
              </div>
            </div>
          </li>
        ))}
      </ul>
    </div>
  );
};

export default Profile;
