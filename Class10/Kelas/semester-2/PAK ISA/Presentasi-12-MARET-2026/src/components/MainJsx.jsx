import React from 'react'

const MainJsx = () => {
  return (
    <section id="main-jsx" className="section">
      <div className="content-wrapper">
        <h2 className="section-title">main.jsx</h2>
        
        <div className="card">
          <h3>Entry Point Aplikasi</h3>
          <p>
            File <strong>main.jsx</strong> adalah titik awal (entry point) dari aplikasi React. File ini bertanggung jawab untuk mengambil komponen utama (biasanya <code>App</code>) dan memasukkannya (render) ke dalam elemen HTML yang ada di file <code>index.html</code>.
          </p>
          
          <div className="code-block">
{`import React from 'react'
import ReactDOM from 'react-dom/client'
import App from './App.jsx'

ReactDOM.createRoot(document.getElementById('root')).render(
  <React.StrictMode>
    <App />
  </React.StrictMode>,
)`}
          </div>
          
          <div className="analogy-box">
            <h4>💡 Analogi Sederhana</h4>
            <p>Bayangkan <strong>main.jsx</strong> seperti saklar utama listrik di sebuah rumah. Tanpa saklar ini dinyalakan, seluruh peralatan listrik (komponen React) di dalam rumah tidak akan bisa menyala, sebagus apapun rumah tersebut dibuat.</p>
          </div>
        </div>
      </div>
    </section>
  )
}

export default MainJsx
