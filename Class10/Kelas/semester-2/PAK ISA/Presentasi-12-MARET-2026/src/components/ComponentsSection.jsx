import React from 'react'

const ComponentsSection = () => {
  return (
    <section id="components" className="section">
      <div className="content-wrapper">
        <h2 className="section-title">Folder Components</h2>
        
        <div className="card">
          <h3>Pecahan UI yang Reusable</h3>
          <p>
            Folder <strong>components</strong> berisi file-file yang mewakili bagian-bagian kecil dari antarmuka pengguna (UI). Setiap komponen memiliki tugas spesifik dan dapat digunakan berulang kali di berbagai tempat dalam aplikasi (reusable).
          </p>
          
          <div className="code-block">
{`// Button.jsx
const Button = ({ text, onClick }) => {
  return (
    <button className="btn-primary" onClick={onClick}>
      {text}
    </button>
  )
}
export default Button`}
          </div>
          
          <div className="analogy-box">
            <h4>💡 Analogi Sederhana</h4>
            <p>Komponen adalah seperti balok-balok <strong>LEGO</strong>. Daripada membuat mobil mainan sekaligus menjadi satu bagian besar, kita merakitnya dari kepingan roda, pintu, dan atap. Jika roda rusak, kita cukup mengganti roda tersebut tanpa merombak seluruh mobil.</p>
          </div>
        </div>
      </div>
    </section>
  )
}

export default ComponentsSection
