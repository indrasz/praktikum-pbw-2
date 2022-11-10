@extends('layouts.extendLayout')

@section('content')

<section>
    <button
      aria-controls="sidebar"
      data-bs-toggle="offcanvas"
      data-bs-target=".sidebar"
      aria-label="Button Hamburger"
      class="sidebarOffcanvas mb-5 btn p-0 border-0 d-flex d-lg-none"
    >
      <i class="fa-solid fa-bars"></i>
    </button>
    <nav class="nav-content gap-5">
      <div class="d-flex gap-3 align-items-center">
        <img
          src="/frontend/assets/images/photo.webp"
          alt="Photo Profile"
          class="photo-profile"
        />
        <div>
          <p class="title-content mb-2">Good Morning, Yeager</p>
          <p class="subtitle-content">
            Finish your profile.
            <a href="#" class="btn-link">Edit now</a>
          </p>
        </div>
      </div>
      <div class="search-wrapper">
        <div class="search-bar flex-fill">
          <input
            class="form-control"
            type="text"
            placeholder="Search shoes"
          />
        </div>
        <button
          class="btn-setting rounded-circle"
          aria-label="Button Setting"
        >
          <svg fill="none">
            <mask id="path-1-inside-1_1_44" fill="white">
              <path
                d="M14.517 3.75833C14.517 2.78723 13.7297 2 12.7586 2H10.2753C9.30421 2 8.51698 2.78723 8.51698 3.75834C8.51698 5.11191 7.0517 5.95789 5.87947 5.2811C5.03847 4.79555 3.96308 5.0837 3.47753 5.9247L2.23586 8.07533C1.75032 8.91632 2.03846 9.9917 2.87946 10.4772C4.05167 11.154 4.05167 12.846 2.87946 13.5228C2.03846 14.0083 1.75032 15.0837 2.23587 15.9247L3.47754 18.0753C3.96309 18.9163 5.03847 19.2045 5.87947 18.7189C7.05169 18.0421 8.51697 18.8881 8.51697 20.2417C8.51697 21.2128 9.3042 22 10.2753 22H12.7586C13.7297 22 14.517 21.2128 14.517 20.2417C14.517 18.8881 15.9822 18.0421 17.1545 18.7189C17.9955 19.2045 19.0709 18.9163 19.5564 18.0753L20.7981 15.9247C21.2836 15.0837 20.9955 14.0083 20.1545 13.5228C18.9823 12.846 18.9823 11.154 20.1545 10.4772C20.9955 9.99169 21.2836 8.9163 20.7981 8.0753L19.5564 5.92468C19.0709 5.08368 17.9955 4.79554 17.1545 5.28109C15.9823 5.95787 14.517 5.1119 14.517 3.75833Z"
              />
            </mask>
            <path
              d="M20.7981 8.0753L19.4991 8.8253L20.7981 8.0753ZM10.2753 3.5H12.7586V0.5H10.2753V3.5ZM3.5349 8.82533L4.77657 6.6747L2.17849 5.1747L0.936826 7.32533L3.5349 8.82533ZM4.77657 17.3253L3.5349 15.1747L0.936827 16.6747L2.1785 18.8253L4.77657 17.3253ZM12.7586 20.5H10.2753V23.5H12.7586V20.5ZM19.499 15.1747L18.2574 17.3253L20.8554 18.8253L22.0971 16.6747L19.499 15.1747ZM18.2574 6.67468L19.4991 8.8253L22.0971 7.3253L20.8555 5.17468L18.2574 6.67468ZM16.4045 3.98205C16.2323 4.08149 16.017 3.95719 16.017 3.75833H13.017C13.017 6.26661 15.7323 7.83425 17.9045 6.58013L16.4045 3.98205ZM20.8555 5.17468C19.9557 3.61624 17.9629 3.08229 16.4045 3.98205L17.9045 6.58013C18.0281 6.50879 18.1861 6.55113 18.2574 6.67468L20.8555 5.17468ZM20.9045 11.7763C22.4629 10.8765 22.9969 8.88375 22.0971 7.3253L19.4991 8.8253C19.5704 8.94886 19.5281 9.10686 19.4045 9.1782L20.9045 11.7763ZM20.9045 12.2237C20.7323 12.1243 20.7323 11.8757 20.9045 11.7763L19.4045 9.1782C17.2323 10.4323 17.2322 13.5677 19.4045 14.8218L20.9045 12.2237ZM22.0971 16.6747C22.9969 15.1163 22.4629 13.1235 20.9045 12.2237L19.4045 14.8218C19.528 14.8931 19.5704 15.0511 19.499 15.1747L22.0971 16.6747ZM16.4045 20.018C17.9629 20.9177 19.9557 20.3838 20.8554 18.8253L18.2574 17.3253C18.186 17.4489 18.028 17.4912 17.9045 17.4199L16.4045 20.018ZM16.017 20.2417C16.017 20.0428 16.2322 19.9185 16.4045 20.018L17.9045 17.4199C15.7323 16.1657 13.017 17.7334 13.017 20.2417H16.017ZM12.7586 23.5C14.5582 23.5 16.017 22.0412 16.017 20.2417H13.017C13.017 20.3843 12.9013 20.5 12.7586 20.5V23.5ZM7.01697 20.2417C7.01697 22.0412 8.47578 23.5 10.2753 23.5V20.5C10.1326 20.5 10.017 20.3843 10.017 20.2417H7.01697ZM6.62947 20.0179C6.80169 19.9185 7.01697 20.0428 7.01697 20.2417H10.017C10.017 17.7334 7.30169 16.1657 5.12947 17.4199L6.62947 20.0179ZM2.1785 18.8253C3.07826 20.3837 5.07103 20.9177 6.62947 20.0179L5.12947 17.4199C5.00591 17.4912 4.84791 17.4489 4.77657 17.3253L2.1785 18.8253ZM2.12946 12.2237C0.571025 13.1235 0.0370655 15.1162 0.936827 16.6747L3.5349 15.1747C3.46357 15.0511 3.5059 14.8931 3.62946 14.8218L2.12946 12.2237ZM2.12946 11.7763C2.30167 11.8757 2.30167 12.1243 2.12946 12.2237L3.62946 14.8218C5.80167 13.5677 5.80167 10.4323 3.62946 9.17821L2.12946 11.7763ZM0.936826 7.32533C0.0370646 8.88376 0.571024 10.8765 2.12946 11.7763L3.62946 9.17821C3.5059 9.10687 3.46357 8.94888 3.5349 8.82533L0.936826 7.32533ZM6.62947 3.98206C5.07103 3.0823 3.07826 3.61626 2.17849 5.1747L4.77657 6.6747C4.84791 6.55114 5.00591 6.5088 5.12947 6.58014L6.62947 3.98206ZM7.01698 3.75834C7.01698 3.9572 6.8017 4.0815 6.62947 3.98206L5.12947 6.58014C7.30169 7.83427 10.017 6.26661 10.017 3.75834H7.01698ZM12.7586 3.5C12.9013 3.5 13.017 3.61566 13.017 3.75833H16.017C16.017 1.9588 14.5582 0.5 12.7586 0.5V3.5ZM10.2753 0.5C8.47579 0.5 7.01698 1.95881 7.01698 3.75834H10.017C10.017 3.61566 10.1326 3.5 10.2753 3.5V0.5Z"
              fill="currentColor"
              mask="url(#path-1-inside-1_1_44)"
            />
            <circle
              cx="11.517"
              cy="12"
              r="2.25"
              stroke="currentColor"
              stroke-width="1.5"
            />
          </svg>
        </button>
      </div>
    </nav>
  </section>

  <section class="d-flex flex-column gap-4">
    <div class="d-flex justify-content-between align-items-center gap-3">
      <h4 class="title-section-content">Exclusive Product From Nike</h4>
      <a href="#" class="btn-link">View All Shoes</a>
    </div>
    <div class="d-flex gap-4 flex-wrap">
      @foreach ($users as $item)
      <div class="product-card">
        <img
          src="/frontend/assets/images/nike_red.png"
          alt="Nike Red"
          width="260"
          height="180"
        />
        <div class="product-detail pt-3">
          <div>
            <p class="label-detail mb-1">{{ $item->fullname }}</p>
            <p class="title-detail">Nike Red Shoe 77</p>
          </div>
          <button
            class="btn btn-fav active"
            aria-label="Button Favorite"
            onclick="handleFavorite(this)"
          >
            <svg fill="currentColor">
              <path
                d="M11.5909 6.09528L12.1213 6.6256L12.6516 6.09528C14.4453 4.30157 17.3535 4.30157 19.1472 6.0953C20.941 7.88902 20.941 10.7972 19.1473 12.591L12.2207 19.5176C12.1658 19.5725 12.0768 19.5725 12.022 19.5176L5.10555 12.6012L5.10485 12.6005L5.0953 12.591C5.09519 12.5909 5.09508 12.5907 5.09497 12.5906C3.30157 10.7969 3.30168 7.88891 5.0953 6.0953C6.88902 4.30158 9.79721 4.30157 11.5909 6.09528Z"
                stroke="currentColor"
                stroke-width="2"
              />
            </svg>
          </button>
        </div>
        <div class="product-detail pt-4">
          <div>
            <p class="label-detail mb-1">Price:</p>
            <p class="price-detail">Rp 220.000</p>
          </div>
          <button
            class="buy-product button btn-rounded active"
            onclick="handleBuy(this)"
          >
            Buy Now
          </button>
        </div>
      </div>
      @endforeach

    </div>
  </section>

  <section class="d-flex flex-column gap-4 mb-5">
    <h4 class="title-section-content">Best Store In This Month</h4>
    <div class="d-flex gap-4 flex-wrap">
      <div class="store-card">
        <img
          src="/frontend/assets/images/adidas.png"
          alt="Adidas Store"
          width="410"
          height="100"
        />
        <div class="store-logo-wrapper">
          <div class="store-logo-circle">
            <img
              src="/frontend/assets/images/adidas_logo.png"
              alt="Adidas Logo"
              class="store-logo"
            />
          </div>
        </div>
        <div class="store-name">
          <div>
            <p class="title-store">
              Adidas Store
              <span
                ><img src="/frontend/assets/icons/ic_badge.svg" alt="Icon Badge"
              /></span>
            </p>
            <p class="username-store">@adidasindonesia</p>
          </div>
          <div class="d-flex gap-3 align-items-center">
            <a href="#" class="btn-link"> Visit Store </a>
            <button
              class="button btn-follow active rounded-pill"
              onclick="handleFollow(this)"
            >
              Following
            </button>
          </div>
        </div>
        <div class="store-detail">
          <div class="section-detail">
            <h6>1.569</h6>
            <p>Total shoes</p>
          </div>
          <div class="vertical-line"></div>
          <div class="section-detail">
            <h6>5.2M</h6>
            <p>Total followers</p>
          </div>
          <div class="vertical-line"></div>
          <div class="section-detail">
            <h6>56</h6>
            <p>Exclusive Shoe</p>
          </div>
        </div>
      </div>
      <div class="store-card">
        <img
          src="/frontend/assets/images/puma.png"
          alt="Puma Store"
          width="410"
          height="100"
        />
        <div class="store-logo-wrapper">
          <div class="store-logo-circle">
            <img
              src="/frontend/assets/images/puma_logo.png"
              alt="Puma Logo"
              class="store-logo"
            />
          </div>
        </div>
        <div class="store-name">
          <div>
            <p class="title-store">
              Puma Store
              <span
                ><img src="/frontend/assets/icons/ic_badge.svg" alt="Icon Badge"
              /></span>
            </p>
            <p class="username-store">@pumaid</p>
          </div>
          <div class="d-flex gap-3 align-items-center">
            <a href="#" class="btn-link"> Visit Store </a>
            <button
              class="button btn-follow rounded-pill"
              onclick="handleFollow(this)"
            >
              +Follow
            </button>
          </div>
        </div>
        <div class="store-detail">
          <div class="section-detail">
            <h6>1.362</h6>
            <p>Total shoes</p>
          </div>
          <div class="vertical-line"></div>
          <div class="section-detail">
            <h6>5.7M</h6>
            <p>Total followers</p>
          </div>
          <div class="vertical-line"></div>
          <div class="section-detail">
            <h6>76</h6>
            <p>Exclusive Shoe</p>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
