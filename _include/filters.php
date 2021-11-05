<div class="filters-label">
    pantazis
</div>
<div class="filters-conatiner">
    <div class="filters-padding">


    </div>
</div>

<style>
    :root {
   --el-closed:0;
   --el-opening:0;
   --el-height:100%;
}

.filters-padding{
    height:100px;
    background:red;

}
.filters-conatiner{      
    transition: height 3s;
    overflow:hidden;

    height:var(--el-height);
    &.closed{
        height:var(--el-closed);

    }
    &.opening{
        height:var(--el-opening);

    }

}


</style>

