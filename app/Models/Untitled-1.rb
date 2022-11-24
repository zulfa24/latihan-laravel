$post = new App\Models\Post 
$post->title = 'Judul Ketiga'
$post->category_id = 3
$post->slug = 'judul-ketiga'
$post->excerpt = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.'
$post->body = '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                 Aperiam amet, quo facilis ipsam esse officiis sequi qui perspiciatis
                 eius alias vero ipsum aliquam optio est, voluptatem fugiat repudiandae harum quisquam.</p>
                 <p>Odio cum sed quisquam, aut sunt labore aspernatur consequatur quia soluta sit magni,
                 vitae, debitis optio. In ex dolorem labore. Possimus ullam voluptatum perferendis 
                 fugiat dolorum corrupti ut exercitationem voluptatem accusamus explicabo ea consectetur
                 illo, iste facilis inventore cum delectus incidunt nesciunt voluptas cupiditate minima?</p>
                 <p>Assumenda placeat inventore impedit rerum? Non hic saepe, quam perspiciatis culpa 
                 asperiores quas, soluta adipisci quae architecto voluptate nulla animi voluptas
                 accusamus iure temporibus ducimus.</p>'


                 Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                 Aperiam amet, quo facilis ipsam esse officiis sequi qui perspiciatis
                 eius alias vero ipsum aliquam optio est, voluptatem fugiat repudiandae harum quisquam.</p>
                 <p>Odio cum sed quisquam, aut sunt labore aspernatur consequatur quia soluta sit magni,
                 vitae, debitis optio. In ex dolorem labore. 
                 
                 Possimus ullam voluptatum perferendis 
                 fugiat dolorum corrupti ut exercitationem voluptatem accusamus explicabo ea consectetur
                 illo, iste facilis inventore cum delectus incidunt nesciunt voluptas cupiditate minima?</p>
                 <p>Assumenda placeat inventore impedit rerum? Non hic saepe, quam perspiciatis culpa 
                 asperiores quas, soluta adipisci quae architecto voluptate nulla animi voluptas
                 accusamus iure temporibus ducimus.

Post::where('category_id', 1)->get()