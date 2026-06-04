import React from 'react'

const Sidebar = () => {
  const menuItems = [
    { id: 'home', label: 'Home' },
    { id: 'main-jsx', label: 'main.jsx' },
    { id: 'app-jsx', label: 'App.jsx' },
    { id: 'components', label: 'Components' },
    { id: 'css', label: 'CSS' },
    { id: 'conclusion', label: 'Kesimpulan' }
  ];

  const handleClick = (e, id) => {
    e.preventDefault();
    const element = document.getElementById(id);
    if (element) {
      element.scrollIntoView({ behavior: 'smooth' });
    }
  };

  return (
    <nav className="sidebar">
      <h2>ReactFiles</h2>
      <ul>
        {menuItems.map(item => (
          <li key={item.id}>
            <a href={`#${item.id}`} onClick={(e) => handleClick(e, item.id)}>
              {item.label}
            </a>
          </li>
        ))}
      </ul>
    </nav>
  )
}

export default Sidebar
