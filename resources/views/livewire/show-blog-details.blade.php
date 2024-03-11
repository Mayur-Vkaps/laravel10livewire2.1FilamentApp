<main>
    <div class="section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <div class="mb-5">
                <h2 class="mb-4" style="line-height:1.5">{{ $article->title }}</h2>
                <span>{{ \Carbon\Carbon::parse($article->created_at)->format('d M Y')}}<span class="mx-2">/</span> </span>
                <p class="list-inline-item">Category : <a href="#!" class="ml-1">{{ $article->category->name }} </a>
                </p>
                <span class="mx-2">/</span>
                <p class="list-inline-item">Author : <a href="#!" class="ml-1">{{ $article->author }} </a>
                </p>


              </div>
              <div class="mb-5 text-center">
                <div class="post-slider rounded overflow-hidden">
                  <img loading="lazy" decoding="async" src="{{ asset('storage/'.$article->image)}}" alt="Post Thumbnail">

                </div>
              </div>
              <div class="content">
                <h4 id="heading-example">{{$article->title}}</h4>
                <p>{{ $article->content}}</p>


              </div>
            </div>
          </div>
        </div>
      </div>
</main>
