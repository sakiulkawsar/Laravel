import React from 'react'
import Header  from '../components/Header'
import NavBar from '../components/navbar'
import Footer from '../components/Footer'

function FrontLayout({children}) {
  return (
    <>
    <div>
       <Header />
        <NavBar />
        {children}

      <Footer />
    </div>
    </>
  )
}

export default FrontLayout