import TopBar from '@/Components/TopBar'
import React, { Children } from 'react'
import NavBar from '@/Components/NavBar'
import Footer from '@/Components/Footer'

function FrontLayout({Children}) {
  return (
    <>
      <TopBar />

      <NavBar />

      {Children}

      <Footer />
    </>
  )
}

export default FrontLayout