<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.header')
</head>

<body>
    @include('user.slider')
    <!-- layer section -->
    <section
      class="my-5"
      style="height: 15vh; background: palevioletred"
    ></section>

    <!--Category section  -->

    <section class="container">
      <div>
        <img
        src="{{asset('assets/userpage/Image/category.png')}}"
        alt=""
        srcset=""
        style="width: 300px;"

      />
      </div>
      <div class="row vh-100 align-items-center">
        <div class="col-12 col-sm-4 py-3 d-flex justify-content-center">
          <div style="width: 80%">
            <div>
              <img
                src="{{asset('assets/userpage/Image/catOne.jpg')}}"
                class="categoryImage rounded-5"
                alt=""
                srcset=""

              />
            </div>
            <div class="d-flex justify-content-between">
              <div>
                <h6 class="fw-bold">Crochet</h6>
                <h6>Explore now</h6>
              </div>
              <div class="d-flex justify-content-center align-items-center">
                <i
                  class="bi bi-arrow-right text-secondary"
                  style="font-size: 30px"
                ></i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-4 py-3 d-flex justify-content-center">
          <div style="width: 80%">
            <div>
              <img
                src="{{asset('assets/userpage/Image/catThree.jpg')}}"
                class="categoryImage rounded-5"
                alt=""
                srcset=""
              />
            </div>
            <div class="d-flex justify-content-between">
              <div>
                <h6 class="fw-bold">Crochet</h6>
                <h6>Explore now</h6>
              </div>
              <div class="d-flex justify-content-center align-items-center">
                <i
                  class="bi bi-arrow-right text-secondary"
                  style="font-size: 30px"
                ></i>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-4 py-3 d-flex justify-content-center">
          <div style="width: 80%">
            <div>
              <img
                src="{{asset('assets/userpage/Image/catTwo.jpg')}}"
                class="categoryImageThr rounded-5"
                alt=""
                srcset=""
              />
            </div>
            <div class="d-flex justify-content-between">
              <div>
                <h6 class="fw-bold">Crochet</h6>
                <h6>Explore now</h6>
              </div>
              <div class="d-flex justify-content-center align-items-center">
                <i
                  class="bi bi-arrow-right text-secondary"
                  style="font-size: 30px"
                ></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- HR Line -->
    <section class="container">
      <hr />
    </section>

    <!-- Content section -->
    <section class="container">
      <div class="row vh-100">
        <div
          class="col-12 col-sm-6 d-flex justify-content-center align-items-center"
        >
          <div style="width: 85%">
            <img
              src="{{asset('assets/userpage/Image/img.png')}}"
              style="height: 80vh; width: 100%"
              alt=""
              srcset=""
            />
          </div>
        </div>
        <div class="col-12 col-sm-6 d-flex justify-content-center align-items-center">
          <div>
            <p class="fontStyle px-4">"Crochet is the art of transforming yarn into beautiful handmade creations one stich at a time. "</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Content sectionTwo -->
    <section class="container">
      <div class="row vh-100">
        <div class="col-12 col-sm-6 d-flex justify-content-center">
        <div>
          <p class="fontStyle px-4">"With just a hook and yarn, crochet allows you to craft intricate and unique treasures from the heart. "</p>
        </div>
      </div>
        <div
          class="col-12 col-sm-6 d-flex justify-content-center "
        >
          <div style="width: 90%">
            <img
              src="{{asset('assets/userpage/Image/img1.png')}}"
              style="height: 90vh; width: 100%"
              alt=""
              srcset=""
            />
          </div>
        </div>
      </div>
    </section>

 @include('user.footer')
  </body>
</html>
