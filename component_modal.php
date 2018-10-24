<!DOCTYPE html>
<html lang="en">
<head>
      <title>Partical Components Excercise: Modal</title>
      <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
      <style type="text/css">
        body { padding-top: 50px; }
      </style>
     
</head>
<body>
    <div id="root" class="container">
      <modal v-if="showModal" @close="showModal = false">
        <p>We Insert Any Text Here.</p>
      </modal>
      <button @click="showModal = true">Show Modal</button>
    </div>

    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>