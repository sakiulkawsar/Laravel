import { Link } from '@inertiajs/react'
import React from 'react'


function NavBar() {
  return (
 <>
 <nav className="navbar navbar-expand-sm bg-dark navbar-dark">
    <div className="container-fluid">
      <ul className="navbar-nav">
        <li className="nav-item">
          <Link className="nav-link active" href="#">Active</Link>
        </li>
        <li className="nav-item">
          <Link className="nav-link" href="/">Home</Link>
        </li>
        <li className="nav-item">
          <Link className="nav-link" href="/about">About</Link>
        </li>
        <li className="nav-item">
          <Link className="nav-link disabled" href="#"></Link>
        </li>
      </ul>
    </div>
  </nav>
 </>
  )
}

export default NavBar