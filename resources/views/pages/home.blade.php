 @extends('layouts.app')



 @section('title')
        Alat Berat
 @endsection
 
 
 
@section('content')
 <!-- Jumbotron -->
    <div class="jumbotron">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div data-aos="fade-right">
              <h1 class="head">Selamat datang di AlatBerat.com</h1>
              <p class="mt-4">
                Alatberat.com adalah pasar online terkemuka yang berfokus pada
                pembelian dan penjualan alat berat di Indonesia.
              </p>
              <button
                type="button"
                class="btn btn-warning text-white"
                style="background-color: #f89f3c"
              >
                Cari Sekarang
              </button>
            </div>
          </div>
          <div class="col-md-6 align-items-center mt-5">
            <div data-aos="fade-left">
              <img
                src="vendor/assets/img/asdada 1.png"
                class="img-fluid"
                alt="..."
                width="500"
              />
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Rekomendasi -->
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-8">
          <h3 class="font-weight-bold">Rekomendasi untuk kamu</h3>
        </div>
      </div>
      <div
        data-aos="fade-down"
        data-aos-offset="300"
        data-aos-easing="ease-in-sine"
      >
        <div class="row mt-3">
          <div class="col-lg-3 col-md-6 col-12">
            <!-- Card -->
            <div class="card mb-4 card-hover">
              <a href="pages/course-single.html" class="card-img-top"
                ><img
                  src="/vendor/assets/img/angular.jpg"
                  alt=""
                  class="card-img-top rounded-top"
              /></a>
              <!-- Card Body -->
              <div class="card-body">
                <h4 class="mb-3 text-truncate-line-2">
                  <a href="pages/course-single.html" class="text-inherit"
                    >Angular - the complete guide for beginner</a
                  >
                </h4>
                <!-- List -->
                <h5 class="font-weight-bold">Rp5.000.000</h5>
                <div class="lh-1">
                  <span class="font-size-xs text-muted">Bandung</span>
                </div>
              </div>
              <!-- Card Footer -->
              <div class="card-footer">
                <div class="row align-items-center no-gutters">
                  <div class="col-auto"></div>
                  <div class="col ml-2 flex-wrap-reverse">
                    <img
                      src="/vendor/assets/img/1.jpg"
                      class="rounded-circle avatar-xs"
                      alt=""
                    />
                    <span>Juanita Bell</span>
                  </div>
                  <div class="col-auto">
                    <a
                      href="#!"
                      class="text-muted"
                      data-toggle="tooltip"
                      data-placement="top"
                      title=""
                      data-original-title="Add to Bookmarks"
                    >
                      <i class="fe fe-bookmark"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <!-- Card -->
            <div class="card mb-4 card-hover">
              <a href="pages/course-single.html" class="card-img-top"
                ><img
                  src="/vendor/assets/img/angular.jpg"
                  alt=""
                  class="card-img-top rounded-top"
              /></a>
              <!-- Card Body -->
              <div class="card-body">
                <h4 class="mb-3 text-truncate-line-2">
                  <a href="pages/course-single.html" class="text-inherit"
                    >Angular - the complete guide for beginner</a
                  >
                </h4>
                <!-- List -->
                <h5 class="font-weight-bold">Rp5.000.000</h5>
                <div class="lh-1">
                  <span class="font-size-xs text-muted">Bandung</span>
                </div>
              </div>
              <!-- Card Footer -->
              <div class="card-footer">
                <div class="row align-items-center no-gutters">
                  <div class="col-auto"></div>
                  <div class="col ml-2">
                    <img
                      src="/vendor/assets/img/1.jpg"
                      class="rounded-circle avatar-xs"
                      alt=""
                    />
                    <span>Juanita Bell</span>
                  </div>
                  <div class="col-auto">
                    <a
                      href="#!"
                      class="text-muted"
                      data-toggle="tooltip"
                      data-placement="top"
                      title=""
                      data-original-title="Add to Bookmarks"
                    >
                      <i class="fe fe-bookmark"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <!-- Card -->
            <div class="card mb-4 card-hover">
              <a href="pages/course-single.html" class="card-img-top"
                ><img
                  src="/vendor/assets/img/angular.jpg"
                  alt=""
                  class="card-img-top rounded-top"
              /></a>
              <!-- Card Body -->
              <div class="card-body">
                <h4 class="mb-3 text-truncate-line-2">
                  <a href="pages/course-single.html" class="text-inherit"
                    >Angular - the complete guide for beginner</a
                  >
                </h4>
                <!-- List -->
                <h5 class="font-weight-bold">Rp5.000.000</h5>
                <div class="lh-1">
                  <span class="font-size-xs text-muted">Bandung</span>
                </div>
              </div>
              <!-- Card Footer -->
              <div class="card-footer">
                <div class="row align-items-center no-gutters">
                  <div class="col-auto"></div>
                  <div class="col ml-2">
                    <img
                      src="/vendor/assets/img/1.jpg"
                      class="rounded-circle avatar-xs"
                      alt=""
                    />
                    <span>Juanita Bell</span>
                  </div>
                  <div class="col-auto">
                    <a
                      href="#!"
                      class="text-muted"
                      data-toggle="tooltip"
                      data-placement="top"
                      title=""
                      data-original-title="Add to Bookmarks"
                    >
                      <i class="fe fe-bookmark"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <!-- Card -->
            <div class="card mb-4 card-hover">
              <a href="pages/course-single.html" class="card-img-top"
                ><img
                  src="/vendor/assets/img/angular.jpg"
                  alt=""
                  class="card-img-top rounded-top"
              /></a>
              <!-- Card Body -->
              <div class="card-body">
                <h4 class="mb-3 text-truncate-line-2">
                  <a href="pages/course-single.html" class="text-inherit"
                    >Angular - the complete guide for beginner</a
                  >
                </h4>
                <!-- List -->
                <h5 class="font-weight-bold">Rp5.000.000</h5>
                <div class="lh-1">
                  <span class="font-size-xs text-muted">Bandung</span>
                </div>
              </div>
              <!-- Card Footer -->
              <div class="card-footer">
                <div class="row align-items-center no-gutters">
                  <div class="col ml-2" style="margin-right: -3px !important" ;>
                    <img
                      src="/vendor/assets/img/1.jpg"
                      class="rounded-circle avatar-xs"
                      alt=""
                    />
                    <span>Juanita Bell</span>
                  </div>
                  <div class="col-auto">
                    <a
                      href="#!"
                      class="text-muted"
                      data-toggle="tooltip"
                      data-placement="top"
                      title=""
                      data-original-title="Add to Bookmarks"
                    >
                      <i class="fe fe-bookmark"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <!-- Card -->
            <div class="card mb-4 card-hover">
              <a href="pages/course-single.html" class="card-img-top"
                ><img
                  src="/vendor/assets/img/angular.jpg"
                  alt=""
                  class="card-img-top rounded-top"
              /></a>
              <!-- Card Body -->
              <div class="card-body">
                <h4 class="mb-3 text-truncate-line-2">
                  <a href="pages/course-single.html" class="text-inherit"
                    >Angular - the complete guide for beginner</a
                  >
                </h4>
                <!-- List -->
                <h5 class="font-weight-bold">Rp5.000.000</h5>
                <div class="lh-1">
                  <span class="font-size-xs text-muted">Bandung</span>
                </div>
              </div>
              <!-- Card Footer -->
              <div class="card-footer">
                <div class="row align-items-center no-gutters">
                  <div class="col-auto"></div>
                  <div class="col ml-2">
                    <img
                      src="/vendor/assets/img/1.jpg"
                      class="rounded-circle avatar-xs"
                      alt=""
                    />
                    <span>Juanita Bell</span>
                  </div>
                  <div class="col-auto">
                    <a
                      href="#!"
                      class="text-muted"
                      data-toggle="tooltip"
                      data-placement="top"
                      title=""
                      data-original-title="Add to Bookmarks"
                    >
                      <i class="fe fe-bookmark"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <!-- Card -->
            <div class="card mb-4 card-hover">
              <a href="pages/course-single.html" class="card-img-top"
                ><img
                  src="/vendor/assets/img/grap.jpg"
                  alt=""
                  class="card-img-top rounded-top"
              /></a>
              <!-- Card Body -->
              <div class="card-body">
                <h4 class="mb-3 text-truncate-line-2">
                  <a href="pages/course-single.html" class="text-inherit"
                    >Angular - the complete guide for beginner</a
                  >
                </h4>
                <!-- List -->
                <h5 class="font-weight-bold">Rp5.000.000</h5>
                <div class="lh-1">
                  <span class="font-size-xs text-muted">Bandung</span>
                </div>
              </div>
              <!-- Card Footer -->
              <div class="card-footer">
                <div class="row align-items-center no-gutters">
                  <div class="col-auto"></div>
                  <div class="col ml-2">
                    <img
                      src="/vendor/assets/img/1.jpg"
                      class="rounded-circle avatar-xs"
                      alt=""
                    />
                    <span>Juanita Bell</span>
                  </div>
                  <div class="col-auto">
                    <a
                      href="#!"
                      class="text-muted"
                      data-toggle="tooltip"
                      data-placement="top"
                      title=""
                      data-original-title="Add to Bookmarks"
                    >
                      <i class="fe fe-bookmark"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <!-- Card -->
            <div class="card mb-4 card-hover">
              <a href="pages/course-single.html" class="card-img-top"
                ><img
                  src="/vendor/assets/img/react.jpg"
                  alt=""
                  class="card-img-top rounded-top"
              /></a>
              <!-- Card Body -->
              <div class="card-body">
                <h4 class="mb-3 text-truncate-line-2">
                  <a href="pages/course-single.html" class="text-inherit"
                    >Angular - the complete guide for beginner</a
                  >
                </h4>
                <!-- List -->
                <h5 class="font-weight-bold">Rp5.000.000</h5>
                <div class="lh-1">
                  <span class="font-size-xs text-muted">Bandung</span>
                </div>
              </div>
              <!-- Card Footer -->
              <div class="card-footer">
                <div class="row align-items-center no-gutters">
                  <div class="col-auto"></div>
                  <div class="col ml-2">
                    <img
                      src="/vendor/assets/img/1.jpg"
                      class="rounded-circle avatar-xs"
                      alt=""
                    />
                    <span>Juanita Bell</span>
                  </div>
                  <div class="col-auto">
                    <a
                      href="#!"
                      class="text-muted"
                      data-toggle="tooltip"
                      data-placement="top"
                      title=""
                      data-original-title="Add to Bookmarks"
                    >
                      <i class="fe fe-bookmark"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <!-- Card -->
            <div class="card mb-4 card-hover">
              <a href="pages/course-single.html" class="card-img-top"
                ><img
                  src="/vendor/assets/img/python.jpg"
                  alt=""
                  class="card-img-top rounded-top"
              /></a>
              <!-- Card Body -->
              <div class="card-body">
                <h4 class="mb-3 text-truncate-line-2">
                  <a href="pages/course-single.html" class="text-inherit"
                    >Angular - the complete guide for beginner</a
                  >
                </h4>
                <!-- List -->
                <h5 class="font-weight-bold">Rp5.000.000</h5>
                <div class="lh-1">
                  <span class="font-size-xs text-muted">Bandung</span>
                </div>
              </div>
              <!-- Card Footer -->
              <div class="card-footer">
                <div class="row align-items-center no-gutters">
                  <div class="col-auto"></div>
                  <div class="col ml-2">
                    <img
                      src="/vendor/assets/img/1.jpg"
                      class="rounded-circle avatar-xs"
                      alt=""
                    />
                    <span>Juanita Bell</span>
                  </div>
                  <div class="col-auto">
                    <a
                      href="#!"
                      class="text-muted"
                      data-toggle="tooltip"
                      data-placement="top"
                      title=""
                      data-original-title="Add to Bookmarks"
                    >
                      <i class="fe fe-bookmark"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="text-center" style="margin-top: 80px">
          <a
            href="destinations.html"
            class="btn"
            style="background-color: #f89f3c"
            >Muat Lainnya</a
          >
        </div>
      </div>
    </div>

    <br /><br />
    <br />

    <!-- Populer -->
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-8">
          <h3 class="font-weight-bold">Terpopuler</h3>
        </div>
      </div>
      <div
        data-aos="flip-left"
        data-aos-easing="ease-out-cubic"
        data-aos-duration="2000"
      >
        <div class="row mt-3">
          <div class="col-lg-3 col-md-6 col-12">
            <!-- Card -->
            <div class="card mb-4 card-hover">
              <a href="pages/course-single.html" class="card-img-top"
                ><img
                  src="/vendor/assets/img/angular.jpg"
                  alt=""
                  class="card-img-top rounded-top"
              /></a>
              <!-- Card Body -->
              <div class="card-body">
                <h4 class="mb-3 text-truncate-line-2">
                  <a href="pages/course-single.html" class="text-inherit"
                    >Angular - the complete guide for beginner</a
                  >
                </h4>
                <!-- List -->
                <h5 class="font-weight-bold">Rp5.000.000</h5>
                <div class="lh-1">
                  <span class="font-size-xs text-muted">Bandung</span>
                </div>
              </div>
              <!-- Card Footer -->
              <div class="card-footer">
                <div class="row align-items-center no-gutters">
                  <div class="col-auto"></div>
                  <div class="col ml-2">
                    <img
                      src="/vendor/assets/img/1.jpg"
                      class="rounded-circle avatar-xs"
                      alt=""
                    />
                    <span>Juanita Bell</span>
                  </div>
                  <div class="col-auto">
                    <a
                      href="#!"
                      class="text-muted"
                      data-toggle="tooltip"
                      data-placement="top"
                      title=""
                      data-original-title="Add to Bookmarks"
                    >
                      <i class="fe fe-bookmark"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <!-- Card -->
            <div class="card mb-4 card-hover">
              <a href="pages/course-single.html" class="card-img-top"
                ><img
                  src="/vendor/assets/img/angular.jpg"
                  alt=""
                  class="card-img-top rounded-top"
              /></a>
              <!-- Card Body -->
              <div class="card-body">
                <h4 class="mb-3 text-truncate-line-2">
                  <a href="pages/course-single.html" class="text-inherit"
                    >Angular - the complete guide for beginner</a
                  >
                </h4>
                <!-- List -->
                <h5 class="font-weight-bold">Rp5.000.000</h5>
                <div class="lh-1">
                  <span class="font-size-xs text-muted">Bandung</span>
                </div>
              </div>
              <!-- Card Footer -->
              <div class="card-footer">
                <div class="row align-items-center no-gutters">
                  <div class="col-auto"></div>
                  <div class="col ml-2">
                    <img
                      src="/vendor/assets/img/1.jpg"
                      class="rounded-circle avatar-xs"
                      alt=""
                    />
                    <span>Juanita Bell</span>
                  </div>
                  <div class="col-auto">
                    <a
                      href="#!"
                      class="text-muted"
                      data-toggle="tooltip"
                      data-placement="top"
                      title=""
                      data-original-title="Add to Bookmarks"
                    >
                      <i class="fe fe-bookmark"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <!-- Card -->
            <div class="card mb-4 card-hover">
              <a href="pages/course-single.html" class="card-img-top"
                ><img
                  src="/vendor/assets/img/angular.jpg"
                  alt=""
                  class="card-img-top rounded-top"
              /></a>
              <!-- Card Body -->
              <div class="card-body">
                <h4 class="mb-3 text-truncate-line-2">
                  <a href="pages/course-single.html" class="text-inherit"
                    >Angular - the complete guide for beginner</a
                  >
                </h4>
                <!-- List -->
                <h5 class="font-weight-bold">Rp5.000.000</h5>
                <div class="lh-1">
                  <span class="font-size-xs text-muted">Bandung</span>
                </div>
              </div>
              <!-- Card Footer -->
              <div class="card-footer">
                <div class="row align-items-center no-gutters">
                  <div class="col-auto"></div>
                  <div class="col ml-2">
                    <img
                      src="/vendor/assets/img/1.jpg"
                      class="rounded-circle avatar-xs"
                      alt=""
                    />
                    <span>Juanita Bell</span>
                  </div>
                  <div class="col-auto">
                    <a
                      href="#!"
                      class="text-muted"
                      data-toggle="tooltip"
                      data-placement="top"
                      title=""
                      data-original-title="Add to Bookmarks"
                    >
                      <i class="fe fe-bookmark"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <!-- Card -->
            <div class="card mb-4 card-hover">
              <a href="pages/course-single.html" class="card-img-top"
                ><img
                  src="/vendor/assets/img/angular.jpg"
                  alt=""
                  class="card-img-top rounded-top"
              /></a>
              <!-- Card Body -->
              <div class="card-body">
                <h4 class="mb-3 text-truncate-line-2">
                  <a href="pages/course-single.html" class="text-inherit"
                    >Angular - the complete guide for beginner</a
                  >
                </h4>
                <!-- List -->
                <h5 class="font-weight-bold">Rp5.000.000</h5>
                <div class="lh-1">
                  <span class="font-size-xs text-muted">Bandung</span>
                </div>
              </div>
              <!-- Card Footer -->
              <div class="card-footer">
                <div class="row align-items-center no-gutters">
                  <div class="col-auto"></div>
                  <div class="col ml-2">
                    <img
                      src="/vendor/assets/img/1.jpg"
                      class="rounded-circle avatar-xs"
                      alt=""
                    />
                    <span>Juanita Bell</span>
                  </div>
                  <div class="col-auto">
                    <a
                      href="#!"
                      class="text-muted"
                      data-toggle="tooltip"
                      data-placement="top"
                      title=""
                      data-original-title="Add to Bookmarks"
                    >
                      <i class="fe fe-bookmark"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="text-center" style="margin-top: 80px">
          <a
            href="#"
            class="btn"
            style="background-color: #f89f3c"
            >Muat Lainnya</a
          >
        </div>
      </div>
    </div>
    

@endsection


