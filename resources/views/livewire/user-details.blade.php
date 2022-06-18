<div class="text-center mt-12">
    <x-jet-input wire:model="firstName" class="mb-8" type="text" />
    <h3
      class="text-4xl font-semibold leading-normal mb-2 text-gray-800 mb-2"
    >
      {{ $firstName }} {{ $lastName}}
    </h3>
    <div
      class="text-sm leading-normal mt-0 mb-2 text-gray-500 font-bold uppercase"
    >
      <i
        class="fas fa-map-marker-alt mr-2 text-lg text-gray-500"
      ></i>
      Los Angeles, California
    </div>
    <div class="mb-2 text-gray-700 mt-10">
      <i class="fas fa-briefcase mr-2 text-lg text-gray-500"></i
      >Solution Manager - Creative Tim Officer
    </div>
    <div class="mb-2 text-gray-700">
      <i class="fas fa-university mr-2 text-lg text-gray-500"></i
      >University of Computer Science
    </div>
</div>