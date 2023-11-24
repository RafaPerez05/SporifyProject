<template>
    <button
        class="
        inline-flex 
        items-center 
        px-20
        py-3 
        bg-green-500 
        border border-transparent 
        rounded-full
        font-semibold 
        text-1xl 
        text-black
        uppercase 
        tracking-widest 
        hover:bg-gray-700 
        dark:hover:bg-white 
        focus:outline-none 
        focus:ring-2 
        focus:ring-indigo-500 
        focus:ring-offset-2 
        dark:focus:ring-offset-gray-800 
        transition ease-in-out 
        duration-150"
    >
        <slot />
    </button>
</template>
