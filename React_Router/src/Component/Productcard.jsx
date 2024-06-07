import React from 'react'

function Productcard({ title, url }) {
  return (
    <>
     <div className="card" style={{ width: "18rem" }}>
      {/* Card image with the provided URL */}
      <img src={url} className="card-img-top" alt="nothing" />
      {/* Card body containing the product title */}
      <div className="card-body">
        <p className="card-text">{title}</p>
      </div>
    </div>
      
    </>
  )
}

export default Productcard