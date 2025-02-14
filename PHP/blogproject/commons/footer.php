  <footer id="footer" class="footer light-background">

      <div class="container footer-top">
          <div class="row gy-4">
              <div class="col-lg-6 col-md-12 footer-about">
                  <a href="index.html" class="logo d-flex align-items-center">
                      <span class="sitename">OnePage</span>
                  </a>
                  <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                  <?php
                    $socialResult = $client->getSocialMediaLinks();
                    extract($socialResult->fetch_assoc());
                    ?>
                  <div class="social-links d-flex mt-4">
                      <?php
                        if ($facebook != "") {
                            echo "<a href='$facebook'><i class='bi bi-facebook'></i></a>";
                        }

                        if ($instagram != "") {
                            echo "<a href='$instagram'><i class='bi bi-instagram'></i></a>";
                        }

                        if ($linkedin != "") {
                            echo "<a href='$linkedin'><i class='bi bi-linkedin'></i></a>";
                        }

                        if ($youtube != "") {
                            echo "<a href='$youtube'><i class='bi bi-youtube'></i></a>";
                        }

                        if ($snapchat != "") {
                            echo "<a href='$snapchat'><i class='bi bi-snapchat'></i></a>";
                        }

                        if ($telegram != "") {
                            echo "<a href='$telegram'><i class='bi bi-telegram'></i></a>";
                        }

                        if ($whatsapp != "") {
                            echo "<a href='whatsapp'><i class='bi bi-whatsapp'></i></a>";
                        }

                        if ($twitter != "") {
                            echo "<a href='$twitter'><i class='bi bi-twitter'></i></a>";
                        }
                        ?>

                  </div>
              </div>


              <div class="col-lg-6 col-md-12 footer-contact text-center text-md-start">
                  <?php
                    $contactresult = $client->getContactInfo();
                    extract($contactresult->fetch_assoc());
                    ?>
                  <h4>Contact Us</h4>
                  <p><?= $address; ?></p>
                  <p class="mt-4"><strong>Phone:</strong> <span><?= $phonenumber; ?></span></p>
                  <p><strong>Email:</strong> <span><?= $emailaddress; ?></span></p>

                  <div id="google_translate_element"></div>

                  <script type="text/javascript">
                      function googleTranslateElementInit() {
                          new google.translate.TranslateElement({
                              pageLanguage: 'en'
                          }, 'google_translate_element');
                      }
                  </script>

                  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
              </div>

          </div>
      </div>

      <div class="container copyright text-center mt-4">
          <p>© <span>Copyright</span> <strong class="px-1 sitename">OnePage</strong> <span>All Rights Reserved</span></p>
          <div class="credits">
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href=“https://themewagon.com>ThemeWagon
          </div>
      </div>

  </footer>