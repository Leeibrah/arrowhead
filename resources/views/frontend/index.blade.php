@extends("frontend.layouts.app")

@section("title")
    {{ app_name() }}
@endsection

<style>
    .top-bar {
    position: sticky;
    top: 0;
    width: 100%;
    background-color: black;
    color: white;
    text-align: center;
    padding-top: 0.75rem;  /* py-3 ≈ 12px */
    padding-bottom: 0.75rem;
    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1); /* shadow-md */
    z-index: 50; /* default Tailwind sticky z-index */
  }

  .top-bar-text {
    font-size: 2.25rem;  /* text-4xl ≈ 36px */
    font-weight: bold;
    color: #fff;
  }

  .main-section {
    flex-grow: 1;
    margin-bottom: 0.75rem;
  }

  .join-button-wrapper {
    display: flex;
    justify-content: center;
    margin-top: 2.5rem;
  }

  .join-bubble-container {
    position: relative;
    display: inline-block;
    color: white;
    font-size: 1.125rem;
  }

  .join-bubble {
    background-color: #facc15;
    padding: 1rem 2rem;
    border-radius: 9999px;
    font-weight: 600;
    text-align: center;
  }

  .triangle {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    bottom: -1.6.5rem;
    width: 0;
    height: 0;
    border-left: 28px solid transparent;
    border-right: 28px solid transparent;
    border-top: 26px solid black;
  }

  .heading-wrapper {
    display: flex;
    justify-content: center;
    margin-top: 4rem;
    text-align: center;
  }

  .challenge-title {
    position: relative;
    display: inline-block;
    font-weight: 800;
    font-size: 2.25rem;
    line-height: 1.25;
  }

  @media (min-width: 640px) {
    .challenge-title {
      font-size: 3rem;
    }
  }

  .highlighted-text {
    position: relative;
    z-index: 10;
    padding: 0 0.5rem;
  }

  .highlight-bg {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0.25rem;
    height: 1rem;
    background-color: #facc15;
    border-radius: 0.25rem;
    z-index: 0;
  }

  .subheading-wrapper {
    display: flex;
    justify-content: center;
    margin-top: 1.25rem;
    text-align: center;
  }

  .challenge-description {
    display: inline-block;
    font-weight: 500;
    font-size: 1.5rem;
  }

  .form-container {
    max-width: 28rem;
    margin: 4rem auto;
    padding: 2rem;
    background: white;
    border-radius: 0.5rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-align: center;
  }

  .form-title {
    font-size: 1.875rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
  }

  .form input {
    width: 100%;
    padding: 0.75rem 1rem;
    font-size: 1.125rem;
    border: 1px solid #d1d5db;
    border-radius: 0.375rem;
    outline: none;
    margin-bottom: 1rem;
  }

  .form input:focus {
    border-color: #facc15;
    box-shadow: 0 0 0 2px #facc15;
  }

  .form button {
    width: 100%;
    margin-top: 1.5rem;
    background-color: #facc15;
    color: black;
    font-weight: bold;
    padding: 1rem 0;
    border-radius: 0.375rem;
    font-size: 1.125rem;
    transition: background-color 0.3s;
    border: none;
    cursor: pointer;
  }

  .form button:hover {
    background-color: #fbbf24;
  }

  .video-container {
    width: 100%;
    max-width: 42rem;
    margin: 1.25rem auto 0.75rem auto;
    aspect-ratio: 16 / 9;
  }

  .video-container iframe {
    width: 100%;
    height: 100%;
    border-radius: 0.5rem;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
  }

</style>

@section("content")
    
    <div class="min-h-screen flex flex-col">
        
        <div class="top-bar">
    		  <p class="top-bar-text">
    		    JOIN THE NO ONE LEFT BEHIND CHALLENGE THAT WILL LEAVE YOU 🤯
    		  </p>
    		</div>

        <main class="main-section">
            <div class="join-button-wrapper">
              <div class="join-bubble-container">
                <div class="join-bubble">JOIN NOW</div>
                <div class="triangle"></div>
              </div>
            </div>

            <div class="heading-wrapper">
              <h1 class="challenge-title">
                <span class="highlighted-text">The Content To Cash Challenge</span>
                <span class="highlight-bg"></span>
              </h1>
            </div>

            <div class="subheading-wrapper">
              <h2 class="challenge-description">
                In this challenge I will be going over my step by step system on marketing,<br />
                content creation, lead generation & how to 10X your income <br />
                with digital products & financial services
              </h2>
            </div>

            <div class="form-container">
              <h2 class="form-title">Find out More! 👇🏼</h2>

              <x-auth-session-status class="text-center" :status="session('status')" />

              <livewire:onboard />
              
            </div>

            <div class="video-container">
              <iframe
                src="https://www.youtube.com/embed/NuBUbJvx6ac"
                title="YouTube video"
                frameBorder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowFullScreen
              ></iframe>
            </div>
        </main>

    </div>
    
@endsection
