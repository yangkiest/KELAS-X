import React from 'react';
import { Link } from 'react-router-dom';

const Home = () => {
  return (
    <div className="home">
      <section className="hero">
        <div className="hero-copy">
          <span className="eyebrow">Career Path</span>
          <h1>Web Jalur Karir Schadenfreude</h1>
          <p>Pelajari perjalanan karir dari siswi SMK kelas 10 semester 2 hingga menjadi PNS Pranata Komputer. Lebih modern, lebih terang, dan ramah pengguna.</p>
          <div className="button-group">
            <Link className="button button-primary" to="/login">Login</Link>
            <Link className="button button-secondary" to="/register">Register</Link>
          </div>
        </div>
        <div className="hero-panel">
          <div className="feature-card fade-in-delay-1">
            <h3>Tanpa Ribet</h3>
            <p>Hanya Home, Dashboard, dan Edit. Sederhana untuk pelajar dan guru.</p>
          </div>
          <div className="feature-card fade-in-delay-2">
            <h3>Interaktif</h3>
            <p>Halaman dashboard dan edit menampilkan popup login bila belum masuk.</p>
          </div>
          <div className="feature-card fade-in-delay-3">
            <h3>Coretan Karir</h3>
            <p>Timeline karir disajikan dengan animasi dan gradasi warna untuk menarik perhatian.</p>
          </div>
        </div>
      </section>
    </div>
  );
};

export default Home;
