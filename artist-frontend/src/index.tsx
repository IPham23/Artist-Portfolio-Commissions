import { StrictMode } from 'react'
import { createRoot } from 'react-dom/client'
import { createBrowserRouter, RouterProvider } from 'react-router-dom'
import Home from './pages/Home.tsx'
import Dashboard from './pages/Dashboard.tsx'
import Commission from './pages/Commission.tsx'


import './index.css'
import App from './App.tsx'

const router = createBrowserRouter([
  {
    path: "/",
    element: <App />,
    children:[
      {index: true, element: <Home />},
      {path: "dashboard", element: <Dashboard />},
      {path: "commission", element: <Commission />}
    ],
  },
])

createRoot(document.getElementById('root')!).render(
  <StrictMode>
     <RouterProvider router={router}/>
  </StrictMode>
)
