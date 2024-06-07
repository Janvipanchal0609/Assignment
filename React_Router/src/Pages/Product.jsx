import React, { Suspense, useState } from "react";
import axios from "axios";
const ProductCard = React.lazy(() => import("../Component/Productcard"));

function Product() {
  
  const [photos, setPhotos] = useState([]);
  const [isFetched, setIsFetched] = useState(false);
  const fetchPhotos = async () => {
    try {
      const res = await axios.get(
        `https://jsonplaceholder.typicode.com/photos`
      );
      setPhotos(res.data);
      setIsFetched(true);
    } catch (error) {
      console.error("Error fetching photos:", error);
    }
  };

  return (
    <>
    <div
      className="container d-flex justify-content-center align-items-center"
      style={{ minHeight: "85vh" }}
    >
      {isFetched ? (
        <div className="container d-flex flex-wrap justify-content-center align-items-center gap-5">
          <Suspense
            fallback={
              <>
                <button className="btn btn-info" disabled>
                  <span
                    className="spinner-border spinner-border-sm"
                    role="status"
                    aria-hidden="true"
                  ></span>
                  Fetching Photos ...
                </button>
              </>
            }
          >
           
            {photos.map((item) => (
              <ProductCard key={item.id} title={item.title} url={item.url} />
            ))}
          </Suspense>
        </div>
      ) : (
        
        <button className="btn btn-info" onClick={fetchPhotos}>
          Fetch Photos
        </button>
      )}
    </div>
      
    </>
  )
}

export default Product