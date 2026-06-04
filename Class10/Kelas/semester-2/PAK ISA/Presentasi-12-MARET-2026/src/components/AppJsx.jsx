import React from 'react'

const AppJsx = () => {
  return (
    <section id="app-jsx" className="section">
      <div className="content-wrapper">
        <h2 className="section-title">App.jsx</h2>
        
        <div className="card">
          <h3>Komponen Induk (Root Component)</h3>
          <p>
            File <strong>App.jsx</strong> adalah komponen induk dari semua komponen yang ada. Ini adalah tempat di mana kita menyusun struktur utama aplikasi, seperti navbar, sidebar, footer, dan area konten utama.
          </p>
          
          <div className="code-block">
{`function App() {
  return (
    <div className="app-container">
      <Navbar />
      <MainContent />
      <Footer />
    </div>
  )
}

export default App`}
          </div>
          
          <div className="analogy-box">
            <h4>💡 Analogi Sederhana</h4>
            <p><strong>App.jsx</strong> itu seperti kerangka tulang sebuah bangunan (struktur utama). Di dalam kerangka ini, kita memasukkan ruangan-ruangan seperti kamar tidur, dapur, dan ruang tamu (yang merupakan <strong>Components</strong>).</p>
          </div>
        </div>
      </div>
    </section>
  )
}

export default AppJsx
