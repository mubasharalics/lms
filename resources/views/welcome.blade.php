<!-- Extends from master layout -->
@extends('layouts.master')
<!-- Uses current Page Title -->
@section('title', 'Learning Management System')
<!-- Uses Side bar elements of current page -->
@section('sidebar')
@parent
<p>Laravel Templete 1.</p>
<p>Laravel Templete 2.</p>
<p>Laravel Templete 3.</p>
@stop
<style>
    html, body {
        height: 100%;
    }

    body {
        margin: 0;
        padding: 0;
        width: 100%;
        display: table;
        font-weight: 100;
        font-family: 'Lato';
    }

    .container {
        text-align: center;
        display: table-cell;
        vertical-align: middle;
    }

    .content {
        text-align: center;
        display: inline-block;
    }

    .title {
        font-size: 96px;
    }
    .title span {
        font-weight: bold;
    }
    .title-prefix {
        text-align: left;
        color: green;
        font-weight: bold;
        font-size: 24px;
    }
</style>
@section('content')
<div class="container">
    <div class="content">
        <div class="title-prefix">Let's start with latest......</div>
        <div class="title">Laravel <span>5.4</span></div>
    </div>
</div>
@stop