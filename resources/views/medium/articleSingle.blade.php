@extends("template.main")

<!--==========================
    Article Section
============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3> {{ $article->title }} </h3>
        </header>

        <div class="row">
            <div class="">
              <p class="description"> {{ $article->body }} </p>
            </div>
        </div>

      </div>
    </section>
