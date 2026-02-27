//import {ThemeContext} from 'react';
import Navbar from "./components/Navbar";
import Footer from "./components/Footer";
import {Outlet} from "react-router";


export default function App(){
  return(
    <>
   {/*<ThemeContext> */} 
      <div>
        <Navbar />
        <main>
          <Outlet />
        </main>
        <Footer />
      </div>
    {/*</ThemeContext> */} 
    </>
  );
}