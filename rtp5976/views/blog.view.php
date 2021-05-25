<section class="blog-me" id="blog">
     <div class="container">
        <!-- main title -->
        <div class="row justify-content-center">
          <div class="col-md-8">
            <h1 class="section-heading">Latest Blog</h1>
          </div>
        </div>
        <!-- main title -->

        <!-- row -->
        <div class="row">
          <?php 
            $limit  = 6;
            $query = "SELECT * FROM blog  LIMIT $limit";
            $result = mysqli_query($link, $query);
          ?>

          <?php while($row = mysqli_fetch_array($result)): ?>
           <div class="col-lg-4 col-md-6 mb-3">
              <!-- Single Blog -->
              <div class="single-blog">
                 <div class="blog-img">
                    <?php echo "<img  src='admin/blogImg/".$row['blogImage']."'>";  ?>
                 </div>
                 <div class="blog-content">
                    <div class="blog-title">
                       <h4 class="font-weight-bold"><?php echo $row['blogName']; ?></h4>
                       <div class="meta">
                          <ul>
                             <li><?php echo $row['date']; ?></li>
                          </ul>
                       </div>
                    </div>
                    <p><?php echo substr($row['blogDescription'], 0, 70)."..."; ?></p>

                    <!-- Sharingbutton Facebook -->
                    <a class="resp-sharing-button__link" href="https://facebook.com/sharer/sharer.php?u=https://powerspediatrics.com/blogs/<?php echo $row['blogUrl']; ?>" target="_blank" rel="noopener" aria-label="">
                      <div class="resp-sharing-button resp-sharing-button--facebook resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--circle">
                        <i class="fab fa-facebook-f"></i>
                        </div>
                      </div>
                    </a>

                    <!-- Sharingbutton Twitter -->
                    <a class="resp-sharing-button__link" href="https://twitter.com/intent/tweet/?url=https://powerspediatrics.com/blogs/<?php echo $row['blogUrl']; ?>" target="_blank" rel="noopener" aria-label="">
                      <div class="resp-sharing-button resp-sharing-button--twitter resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--circle">
                        <i class="fab fa-twitter"></i>
                        </div>
                      </div>
                    </a>


                    <!-- Sharingbutton LinkedIn -->
                    <a class="resp-sharing-button__link" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://powerspediatrics.com/blogs/<?php echo $row['blogUrl']; ?>&amp;title=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking.&amp;summary=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking.&amp;source=http%3A%2F%2Fsharingbuttons.io" target="_blank" rel="noopener" aria-label="">
                      <div class="resp-sharing-button resp-sharing-button--linkedin resp-sharing-button--small"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--circle">
                        <i class="fab fa-linkedin-in"></i>
                        </div>
                      </div>
                    </a>

                  

                    
                    <form method="post">
                      <input type="hidden" name="blogName" value="<?php echo $row['blogName']; ?>">
                      <input type="submit" name="blogRead" class="box_btn" value="Read More">
                    </form>

                 </div>
              </div>
           </div>
           <?php endwhile; ?>


        </div>
        <!-- row -->

        <div class="text-center">
          <form>
            <input type="hidden" name="page_url" value="blogs">
            <button type="submit" class="btn box_btn py-3 px-4">View All</button>
          </form>
          
        </div>
       
     </div>
  </section>
 