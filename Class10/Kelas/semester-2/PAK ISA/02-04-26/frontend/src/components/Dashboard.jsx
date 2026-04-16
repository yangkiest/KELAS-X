import React, { useEffect, useState } from 'react';
import axios from 'axios';
import { Link } from 'react-router-dom';

const Dashboard = () => {
  const [careers, setCareers] = useState([]);
  const [loading, setLoading] = useState(true);
  const [authorized, setAuthorized] = useState(true);
  const token = localStorage.getItem('token');

  useEffect(() => {
    const fetchCareers = async () => {
      if (!token) {
        setAuthorized(false);
        setLoading(false);
        return;
      }

      try {
        const response = await axios.get('/api/careers', {
          headers: { Authorization: `Bearer ${token}` }
        });
        setCareers(response.data);
      } catch (error) {
        setAuthorized(false);
      } finally {
        setLoading(false);
      }
    };

    fetchCareers();
  }, [token]);

  if (!authorized) {
    return (
      <div className="auth-popup-overlay">
        <div className="auth-popup">
          <h2>Login dulu ya!</h2>
          <p>Halaman dashboard hanya bisa diakses setelah kamu login atau register.</p>
          <div className="button-group">
            <Link className="button button-primary" to="/login">Login</Link>
            <Link className="button button-secondary" to="/register">Register</Link>
          </div>
        </div>
      </div>
    );
  }

  return (
    <div className="page-content">
      <div className="page-header">
        <div>
          <span className="eyebrow">Dashboard</span>
          <h2>Timeline Karir Schadenfreude</h2>
          <p>Lihat perjalanan karir dari SMK ke jalur CPNS dengan tampilan modern.</p>
        </div>
      </div>

      {loading ? (
        <div className="loading-block">Memuat timeline...</div>
      ) : (
        <div className="timeline">
          {careers.map((career, index) => (
            <div key={career.id} className={`timeline-item ${index % 2 === 0 ? 'left' : 'right'}`}>
              <div className="timeline-content">
                <div className="timeline-meta">{career.career_date}</div>
                <h3>{career.title}</h3>
                <p>{career.description}</p>
              </div>
            </div>
          ))}
        </div>
      )}
    </div>
  );
};

export default Dashboard;
