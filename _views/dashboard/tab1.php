<div class="container tab tab1 active">
  <div class="row">
  <div class="container1">
  <div class="test area-1">1</div>
  <div class="test area-2">2</div>
  <div class="test area-3">3</div>
  <div class="test area-4">4</div>
  <div class="test area-5">5</div>
  <div class="test area-6">6</div>
  <div class="test area-7">7</div>
  <div class="test area-8">8</div>
  <div class="test area-9">9</div>
  <div class="test area-10">10</div>
  <div class="test area-11">11</div>
</div>
 
  </div>
</div>
<style>
  .test{
    border: 1px solid;
  }
  .container1 {
    height:100vh;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-template-rows: 1fr repeat(4, 1.5fr);
  gap: 0px 0px;
  grid-auto-flow: row;
  grid-template-areas:
    "area-1 area-2 area-3 area-4"
    "area-5 area-6 area-9 area-9"
    "area-7 area-8 area-9 area-9"
    "area-10 area-10 area-11 area-11"
    "area-10 area-10 area-11 area-11";
}
.area-1 { grid-area: area-1; }
.area-2 { grid-area: area-2; }
.area-3 { grid-area: area-3; }
.area-4 { grid-area: area-4; }
.area-5 { grid-area: area-5; }
.area-6 { grid-area: area-6; }
.area-7 { grid-area: area-7; }
.area-8 { grid-area: area-8; }
.area-9 { grid-area: area-9; }
.area-10 { grid-area: area-10; }
.area-11 { grid-area: area-11; }
</style>

<script>
debugger;
$(".container1")
   



</script>