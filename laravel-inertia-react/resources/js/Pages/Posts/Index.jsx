import Layout from '@/Layouts/layout/layout'
import React from 'react'
Layout

function Index({ posts }) {
    return (
        <Layout>
            <div className='grid'>
                <div className='w-full'>
                    <div className='card mb-0'>
                        <h1>
                            Post all
                        </h1>

              {posts.map(item => (
    <div key={item.id}>
        <h4>{item.title}</h4>
        <h4>{item.body}</h4>
    </div>
))}

                </div>
            </div>

        </div>


    </Layout >
  )
}

export default Index