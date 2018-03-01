@extends('layouts.app')

@section('content')
    <div class="hero-wrap">
    <h1 class="hero-heading">Coinpaper Exchange</h1>
    <div class="feature-hero">
      <h1 class="title">CoinPaper Is Available By <strong>Private</strong> Invite Only</h1>
      <h3 class="title2">If you want to buy cryptocurrencies please reach out to the person who invited you directly.</h3>
    </div>
  </div>
  <div class="btn-ctn">
    <button id="getstarted" class="main-btn">Contact</button>
  </div>
  <div class="moreinfo">
    <div class="center-txt">
      <h4 class="priceupdateheader">Current Price Of BitCoin</h4>
      <p class="getappnow">Updated Every Minute - <span id="timer"></span></p>
    </div>
    <div class="center-txt links-ctn">
      <h2 id="bitcoinPrice"></h2>
    </div>
  </div>
@endsection