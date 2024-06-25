<form action="<?php echo site_url(); ?>" method="get">
    <!-- specific by category, value is category number -->
    <!-- <input type="hidden" name="cat" value="5"> -->
    <input type="text" name="s" id="search" class="form-control" placeholder="Search..." value="<?php the_search_query(); ?>" required>
    <span><input type="submit" value="Search"></span>
</form>