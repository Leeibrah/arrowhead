<style type="text/css">
	.submitted-message {
	  margin-top: 40px;
	  text-align: center;
	  font-family: sans-serif;
	}

	/*.submitted-message .title {
	  font-weight: 900;
	  font-size: 2rem;
	  margin-bottom: 20px;
	}

	.submitted-message .body {
	  font-size: 1.125rem;
	  font-weight: 600;
	  line-height: 1.6;
	}*/
	.video-section {
	  background-color: #fff;
	  padding: 4rem 1rem;
	}

	.container {
	  max-width: 1200px;
	  margin: 0 auto;
	}

	.video-grid {
	  display: grid;
	  grid-template-columns: 1fr;
	  gap: 2rem;
	}

	@media (min-width: 768px) {
	  .video-grid {
	    grid-template-columns: 1fr 1fr;
	  }
	}

	.video-card {
	  background-color: #f9fafb;
	  border-radius: 8px;
	  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
	  overflow: hidden;
	}

	.video-wrapper {
	  position: relative;
	  padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
	  height: 0;
	}

	.video-wrapper iframe {
	  position: absolute;
	  top: 0;
	  left: 0;
	  width: 100%;
	  height: 100%;
	  border-radius: 8px;
	}


</style>

<div>
    <x-frontend.header-block :title="$submitted" />

    <section class="mx-auto max-w-screen-xl bg-white text-gray-600">
        <div class="grid grid-cols-1 submitted-message">
			<p>
				Thank you for submitting your information.
			</p>
			<p>
				Our team is reviewing it and will reach out soon with life insurance options tailored to you.
			</p>
  
        </div>
    </section>


    <section class="mx-auto max-w-screen-xl bg-white text-gray-600">
        <div class="grid grid-cols-1">
            <section class="video-section">
			  <div class="container">
			    <div class="video-grid">
			      <div class="video-card">
			        <div class="video-wrapper">
			          <iframe
			            src="https://www.youtube.com/embed/iT6F0vp8ql8"
			            title="YouTube video"
			            frameborder="0"
			            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
			            allowfullscreen
			          ></iframe>
			        </div>
			      </div>

			      <div class="video-card">
			        <div class="video-wrapper">
			          <iframe
			            src="https://www.youtube.com/embed/900relLrlZ8"
			            title="YouTube video"
			            frameborder="0"
			            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
			            allowfullscreen
			          ></iframe>
			        </div>
			      </div>

			      <div class="video-card">
			        <div class="video-wrapper">
			          <iframe
			            src="https://www.youtube.com/embed/3WECJQrCj4M"
			            title="YouTube video"
			            frameborder="0"
			            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
			            allowfullscreen
			          ></iframe>
			        </div>
			      </div>
			    </div>
			  </div>
			</section>


        </div>
    </section>
</div>