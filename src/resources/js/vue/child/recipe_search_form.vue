<template>
    <div id="recipe_search_form">
        <h2>検索条件</h2>
        <form method="GET" action="/search">
            <input type="text" value="title" name="title">
            <input type="text" value="categiry" name="category">
            <input type="text" value="material" name="material">
            <input type="submit" value="検索">
        </form>
    </div>
</template>

<script>
export default {
}
</script>

<style>
#recipe_search_form {
    width: 250px;
    height: 400px;
    box-shadow: 0 0 3px #BCB5B5;
    margin: 0 20px;
    border-radius: 13px;
    border: solid 2px #BCB5B5;
}

#recipe_search_form h2 {
    font-size: 1.5rem;
      color: white;
      margin-left: 20px;
      font-weight: bold;
      background-color: #F7B46B;
      margin: 0;
      padding: 15px;
      border-radius: 10px 10px 0 0;
}
</style>