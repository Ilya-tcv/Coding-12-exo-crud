@extends('templates.index')

{{-- Head --}}
@section('head')
    @include('templates.head')
@endsection

  <!--==========================
  Hero Section
  ============================-->
  @section('heroSection')
    @include('templates.heroSection')
  @endsection

  <!--==========================
  Header Section
  ============================-->
@section('header')
    @include('templates.header')
@endsection


  <!--==========================
  About Section
  ============================-->
@section('aboutSection')
    @include('templates.aboutSection')
@endsection

  <!--==========================
  Services Section
  ============================-->
@section('servicesSection')
    @include('templates.servicesSection')
@endsection

  <!--==========================
  Subscrbe Section
  ============================-->
@section('subscribeSection')
    @include('templates.subscribeSection')
@endsection


  <!--==========================
  Porfolio Section
  ============================-->
@section('portfolioSection')
    @include('templates.portfolioSection')
@endsection

  <!--==========================
  Testimonials Section
  ============================-->
@section('testimonialsSection')
    @include('templates.testimonialsSection')
@endsection


  <!--==========================
  Team Section
  ============================-->
@section('teamSection')
    @include('templates.teamSection')
@endsection

  
  <!--==========================
  Contact Section
  ============================-->
@section('contactSection')
    @include('templates.contactSection')
@endsection


  <!--==========================
  Footer
============================-->
@section('footer')
    @include('templates.footer')
@endsection


{{-- SCRIPTS --}}
@section('scripts')
    @include('templates.scripts')
@endsection