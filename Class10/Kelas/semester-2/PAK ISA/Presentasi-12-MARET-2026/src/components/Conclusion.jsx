import React from 'react'

const Conclusion = () => {
  return (
    <section id="conclusion" className="section">
      <div className="content-wrapper">
        <h2 className="section-title">Kesimpulan</h2>
        
        <div className="card">
          <h3>Kolaborasi File dalam React</h3>
          <p>
            Setiap file dalam proyek React memiliki perannya masing-masing. Mereka bekerja sama layaknya sebuah tim untuk membentuk aplikasi yang utuh dan berfungsi dengan baik.
          </p>
          
          <ul className="members-list" style={{ marginTop: '1.5rem' }}>
            <li><strong>main.jsx</strong> sebagai penyala mesin.</li>
            <li><strong>App.jsx</strong> sebagai kerangka utama penyusun aplikasi.</li>
            <li><strong>Components</strong> sebagai kepingan-kepingan puzzle yang menyusun isi aplikasi.</li>
            <li><strong>CSS</strong> sebagai desainer yang mempercantik tampilan.</li>
          </ul>
          
          <div className="analogy-box">
            <h4>💡 Analogi Sederhana</h4>
            <p>React itu seperti sebuah restoran. <strong>main.jsx</strong> adalah manajernya, <strong>App.jsx</strong> adalah gedung restorannya, <strong>components</strong> adalah para koki, pelayan, dan kasir yang memiliki tugas spesifik, sedangkan <strong>CSS</strong> adalah dekorasi ruangan restoran yang membuatnya menarik bagi pengunjung.</p>
          </div>
        </div>
      </div>
    </section>
  )
}

export default Conclusion
