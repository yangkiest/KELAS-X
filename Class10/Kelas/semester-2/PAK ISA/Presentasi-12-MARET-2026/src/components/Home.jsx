import React from 'react'

const Home = () => {
  return (
    <section id="home" className="section">
      <div className="content-wrapper">
        <h1>Fungsi File Dalam React</h1>
        
        <div className="card">
          <h3>Kelompok 3</h3>
          <ul className="members-list">
            <li>Cinta Rosi Putri Pratama / 07</li>
            <li>Dinda Aulia Nur Waqidiyah / 08</li>
            <li>Dinda Dwi Wulandari / 09</li>
          </ul>
          
          <div style={{ display: 'flex', gap: '2rem', marginTop: '2rem' }}>
            <div>
              <p style={{ margin: 0, color: 'var(--accent)', fontWeight: 'bold' }}>Kelas</p>
              <p style={{ fontSize: '1.2rem', color: '#fff' }}>10 RPL</p>
            </div>
            <div>
              <p style={{ margin: 0, color: 'var(--accent)', fontWeight: 'bold' }}>Mata Pelajaran</p>
              <p style={{ fontSize: '1.2rem', color: '#fff' }}>PPLG</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  )
}

export default Home
