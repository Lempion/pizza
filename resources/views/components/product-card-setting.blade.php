@props(['product'])

<div class="mt-5">
    <ul class="items-center border w-full font-medium text-lg text-gray-900 bg-white rounded-xl overflow-hidden">
        <li class="w-full flex justify-between py-2">
            <div class="w-1/3 flex flex-col justify-center items-center items-center border-x space-y-1">
                <input id="pizza-small" type="radio" value="" name="list-radio" class="cursor-pointer w-5 h-5 text-orange-500 group-hover:bg-orange-300 hover:bg-orange-400 focus:ring-0 border-orange-500">
                <label for="pizza-small" class="group cursor-pointer">Small</label>
            </div>
            <div class="w-1/3 flex flex-col justify-center items-center items-center border-x space-y-1">
                <input checked id="pizza-medium" type="radio" value="" name="list-radio" class="cursor-pointer w-5 h-5 text-orange-500 group-hover:bg-orange-300 hover:bg-orange-400 focus:ring-0 border-orange-500">
                <label for="pizza-medium" class="group cursor-pointer">Medium</label>
            </div>
            <div class="w-1/3 flex flex-col justify-center items-center items-center border-x space-y-1">
                <input id="pizza-hight" type="radio" value="" name="list-radio" class="cursor-pointer w-5 h-5 text-orange-500 group-hover:bg-orange-300 hover:bg-orange-400 focus:ring-0 border-orange-500">
                <label for="pizza-hight" class="group cursor-pointer">Hight</label>
            </div>
        </li>
    </ul>
</div>
