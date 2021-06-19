<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Home page
      </h2>
    </template>

    <div class="py-12" style="background-color:pink; height:100vh">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Chat rooms app:
            <br />
            <br />
          </h2>
          <p>
            In this app you can choose chat room in which you can discuss.
            <br />
            When you choose room, you can type your message and send it.
            <br />
            When you send a message it will be displayed to all people in that
            room.
            <br />
            They can see it and send you their replay.
            <br />
            <br />
            Currently available rooms are:
            <br />
            1. General
            <br />
            2. Healthcare
            <br />
            3. Fashion
            <br />
            4. Lifestyle
            <br />
            <br />
            Related apps:
            <br />
          <div style="display:flex; justify-content:space-around">
            <button type="button" class="place-self-end bg-gray-500 hover:bg-blue-700 p-1 mt-1 rounded text-white"
              style="background-color:darkblue; color:white"><a href="https://www.facebook.com/"
                target="_blank">Facebook </a></button>
            <button type="button" class="place-self-end bg-gray-500 hover:bg-blue-700 p-1 mt-1 rounded text-white"
              style="background-color:green; color:white"><a href="https://www.whatsapp.com/" target="_blank">WhatsApp
              </a></button>
            <button type="button" class="place-self-end bg-gray-500 hover:bg-blue-700 p-1 mt-1 rounded text-white"
              style="background-color:purple; color:white"><a href="https://www.instagram.com/"
                target="_blank">Instagram</a></button>
          </div>
          <br />
          </p>
        </div>
      </div>
    </div>


  </app-layout>
</template>


<script>
  import AppLayout from "@/Layouts/AppLayout";
  import Button from "../Jetstream/Button.vue";
  //  import Welcome from @/Jetstream/Welcome'

  export default {
    components: {
      AppLayout,
      Button,
      //    Welcome,
    },
  };
</script>