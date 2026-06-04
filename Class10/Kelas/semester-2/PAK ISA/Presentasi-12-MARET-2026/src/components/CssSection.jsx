import React from 'react'

const CssSection = () => {
  return (
    <section id="css" className="section">
      <div className="content-wrapper">
        <h2 className="section-title">File CSS</h2>
        
        <div className="card">
          <h3>Gaya dan Tampilan Visual</h3>
          <p>
            File <strong>CSS (seperti index.css atau App.css)</strong> digunakan untuk mengatur tampilan visual dari aplikasi. Ini termasuk warna, ukuran font, tata letak, margin, animasi, dan responsivitas desain pada berbagai ukuran layar.
          </p>
          
          <div className="code-block">
{`.card {
  background: rgba(30, 41, 59, 0.7);
  border-radius: 1rem;
  padding: 2rem;
  transition: transform 0.3s;
}

.card:hover {
  transform: translateY(-5px);
}`}
          </div>
          
          <div className="analogy-box">
            <h4>💡 Analogi Sederhana</h4>
            <p>Jika HTML/React adalah kerangka dinding rumah yang masih disemen, maka <strong>CSS</strong> adalah cat dinding, keramik lantai, dan dekorasi lampu yang membuat rumah tersebut terlihat indah, nyaman, dan modern.</p>
          </div>
        </div>
      </div>
    </section>
  )
}

export default CssSection
