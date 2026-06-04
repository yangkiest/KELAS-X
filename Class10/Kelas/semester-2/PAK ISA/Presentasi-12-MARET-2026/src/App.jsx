import React from 'react'
import Sidebar from './components/Sidebar'
import Home from './components/Home'
import MainJsx from './components/MainJsx'
import AppJsx from './components/AppJsx'
import ComponentsSection from './components/ComponentsSection'
import CssSection from './components/CssSection'
import Conclusion from './components/Conclusion'

function App() {
  return (
    <div className="app-container">
      <Sidebar />
      <main className="main-content">
        <Home />
        <MainJsx />
        <AppJsx />
        <ComponentsSection />
        <CssSection />
        <Conclusion />
      </main>
    </div>
  )
}

export default App
