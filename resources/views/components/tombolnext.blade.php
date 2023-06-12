<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-gray dark:bg-gray-800 border border-gray-300 dark:border-gray-200 
rounded-md font-semibold text-xs text-indigo-700 dark:text-indigo-300 
uppercase tracking-widest shadow-sm hover:bg-gray-500 dark:hover:bg-gray-700 
focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 
dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150']) }}>
   {{$slot}}
</button>

