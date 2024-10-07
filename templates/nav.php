
<!DOCTYPE html >
<html>
    <head>

    <style>
    #nav101{
       margin-top: -80px;
        
    }

    #login{
        margin-right: 1000px;
    }

    #div101{
        padding-left: 700px;
    }
   
</style>
    </head>

<div class="b-example-divider"></div>
 <nav id="nav101">
    <div class="px-3 py-2 bg-dark text-white">
      <div id="div101" class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
          </a>

          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
              <li>
                <a href="<?php echo home_url('home');  ?>" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#grid"/></svg>
                  خانه
                </a>
              </li>
              <li>
                  <a href="<?php  echo home_url("dashboard");  ?>" class="nav-link text-white">
                      <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#speedometer2"/></svg>
                      
                          صفحه کاربری
                      </a>
              </li>
              <li>
                  <a href="#" class="nav-link text-white">
                      <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#table"/></svg>
                      سفارشات
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#grid"/></svg>
                        محصولات
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">
                        <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#people-circle"/></svg>
                        مشتری ها
                    </a>
                </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="px-3 py-2 border-bottom mb-3">
      <div class="container d-flex flex-wrap justify-content-center">
        <div id="login" class="text-end">
        <ul>
            <li>
        <?php if(is_user_loggen_in()): ?>   
          <a href="<?php echo home_url('logout'); ?>">خروج</a>
                    
          <?php else: ?>
                        <a href="<?php echo home_url('login'); ?>">ورود</a>
                    <?php endif; ?>
            </li>
        </ul>    
        </div>
      </div>
    </div>
    </nav>
  <div class="b-example-divider"></div>

</main>

  
      
  </body>
</html>
