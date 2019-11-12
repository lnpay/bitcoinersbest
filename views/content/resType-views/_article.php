<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>

<div class="article-module d-flex br-4 mb-30 fade-in">
  <div class="flex-grow-1 align-self-center">
      <img src="<?= $model->image ?>" class="card-img" alt="...">
      <h6 class="text-uppercase c-gray-1 medium mt-25 mb-15">TALES FROM THE CRYPT</h6>
      <h5 class="medium mb-15 c-white"><?= $model->title ?></h5>
      <h5 class="regular c-gray-1"><?= $model->description ?></h5>
  </div>
  <div class="align-self-top pl-20">
      <!-- <div class="votes text-center">
          <h6 class="medium mb-5 c-white"><?= $model->vote_count ?></h6>
          <button class="btn bg-brand br-circle icon-wrap push-button">
            <span class="icon a a-link plus rounded"></span>
            <h6 class="vote-increment c-white"></h6>
          </button>
      </div> -->
      <div class="votes text-center">
          <button class="vote btn btn-transparent bg-brand icon-wrap">
            <svg class="push-button" width="12" height="42" viewBox="0 0 9 28" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M3.99984 0L-0.00015655 17.1C-0.100157 17.3 0.199843 17.5 0.399843 17.4L2.39984 16.2C2.89984 15.9 3.49984 16.2 3.49984 16.8L3.89984 27.4C3.89984 27.5 3.99984 27.5 3.99984 27.4L8.09984 10.2C8.19984 10 7.89984 9.8 7.69984 9.9L5.69984 11.1C5.19984 11.4 4.59984 11.1 4.59984 10.5L3.99984 0C3.99984 0 4.09984 0 3.99984 0Z" fill="#6F7C91"/>
            </svg>
            <h6 class="medium mt-10 c-white"><?= $model->vote_count ?></h6>
            <!-- <h6 class="vote-increment c-white">10</h6> -->
          </button>
      </div>
      <!-- <div class="votes text-center mt-30">
          <button class="vote btn btn-transparent bg-brand icon-wrap">
            <svg class="push-button" width="34" height="42" viewBox="0 0 22 28" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M10.7 0.4L11.2 10.9C11.2 11.5 11.9 11.8 12.3 11.5L14.3 10.3C14.5 10.2 14.7 10.4 14.7 10.6L10.6 27.8C10.6 27.9 10.5 27.8 10.5 27.8L10.1 17.2C10.1 16.6 9.4 16.3 9 16.6L7 17.8C6.8 17.9 6.6 17.7 6.6 17.5L10.7 0.4C10.7 0.3 10.6 0.3 10.7 0.4ZM2.4 0L0 10.4C0 10.5 0.1 10.6 0.2 10.6L1.4 9.9C1.7 9.7 2.1 9.9 2.1 10.3L2.4 16.7H2.5L4.8 6.2C4.8 6.1 4.7 6 4.6 6L3.4 6.8C3.1 7 2.8 6.8 2.7 6.4L2.4 0ZM19.3 0L16.9 10.4C16.9 10.5 17 10.6 17.1 10.6L18.3 9.9C18.6 9.7 19 9.9 19 10.3L19.3 16.7H19.4L21.8 6.2C21.8 6.1 21.7 6 21.6 6L20.4 6.7C20.1 6.9 19.7 6.7 19.7 6.3L19.3 0Z" fill="#6F7C91"/>
            </svg>
            <h6 class="medium mt-10 c-white"><?= $model->vote_count ?></h6>
          </button>
      </div> -->
  </div>
</div>
