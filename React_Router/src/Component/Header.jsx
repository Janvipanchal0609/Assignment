import React from 'react'
import Aheader from '../Components/Aheader'
import { Helmet } from 'react-helmet'

function Adashboard() {
  return (
    <>
    <Helmet>
        
  <link href="Admin/assets/img/favicon.png" rel="icon" />
  <link href="Admin/assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

  <link href="https://fonts.gstatic.com" rel="preconnect" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />
  
  <link href="Admin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="Admin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="Admin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
  <link href="Admin/assets/vendor/quill/quill.snow.css" rel="stylesheet" />
  <link href="Admin/assets/vendor/quill/quill.bubble.css" rel="stylesheet" />
  <link href="Admin/assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
  <link href="Admin/assets/vendor/simple-datatables/style.css" rel="stylesheet" />
  <link href="Admin/assets/css/style.css" rel="stylesheet" />
    </Helmet>
       <Aheader/>
    </>
  )
}

export default Adashboard