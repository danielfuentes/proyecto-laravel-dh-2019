@extends('layouts.app')

@section('assets')
    <link rel="stylesheet" href="{{asset('css/faq.css')}}">
@endsection

@section('content')
<div class="container-fluid mb-3">
    <div class="title-container">
        <h1>Preguntas Frecuentes</h1>
    </div>

    <main id="main" class="main-container">
        
        <section class="section-container">
            <article class="article-title">
                <h2>¿Cuál es el costo de envío?</h2>
            </article>
            <article class="respuesta">
                <p>El costo de envío será mostrado en base al total de la compra y ubicación, en el checkout, en el momento previo a la compra.</p>
            </article>
        </section>

        <section class="section-container">
            <article class="article-title">
                <h2>¿Dónde puedo recibir mi pedido??</h2>
            </article>
            <article class="respuesta" >
                <p>Realizamos envíos a todo el país.</p>
            </article>
        </section>

        <section class="section-container">
            <article class="article-title">
                <h2>¿Cuánto tarda en llegar el pedido?</h2>
            </article>
            <article class="respuesta">
                <p>Puedes solicitar un cambio hasta 15 días luego de realizada la compra.</p>
            </article>
        </section>

        <section class="section-container">
            <article class="article-title">
                <h2>¿Qué debo hacer si el producto no llega en buen estado?</h2>
            </article>
            <article class="respuesta" >
                <p>Ponte en contacto con nosotros a torcas2@me.com y te enviaremos uno nuevo.</p>
            </article>
        </section>

        <section class="section-container">
            <article class="article-title">
                <h2>¿Como recomiendan lavar nuestras prendas?</h2>
            </article>
            <article class="respuesta">
                <p>Siempre es importante seguir los consejos especificados en las etiquetas: lavar con agua fria (preferentemente al reves), no usar secarropas y evitar planchar sobre la estampa. </p>
            </article>
        </section>

        <section class="section-container">
            <article class="article-title">
                <h2>¿Qué formas de pago puedo aprovechar para realizar mi compra?</h2>
            </article>
            <article class="respuesta">
                <p>Aceptamos tarjetas de crédito o débito de cualquier entidad financiera.</p>
            </article>
        </section>

        <section class="section-container">
            <article class="article-title">
                <h2>Los precios de la tienda online y de la tienda física son los mismos?</h2>
            </article>
            <article class="respuesta">
                <p>Si, pero si existiera alguna diferencia, el correcto sería el del ticket de compra.</p>
            </article>
        </section>
    </main>
</div>
@endsection