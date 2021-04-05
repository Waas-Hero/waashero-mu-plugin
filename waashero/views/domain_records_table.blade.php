<div class="" >

    <div class="rounded-lg shadow-lg bg-white max-w-screen overflow-x-scroll">
        <div class="flex flex-col">
            <div class="table align-middle min-w-full">
                <div class="table-row divide-x divide-gray-200">
        
                    <div class="relative table-cell h-12 overflow-hidden align-top">
                    
                        <button class="w-full h-full px-6 py-3 border-b border-gray-200 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider flex items-center focus:outline-none flex justify-center">
                            <span class="inline ">{{ __('Type') }}</span>
                        </button>

                    </div>

                    <div class="relative table-cell h-12 overflow-hidden align-top">
                    
                        <button class="w-full h-full px-6 py-3 border-b border-gray-200 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider flex items-center focus:outline-none flex justify-center">
                            <span class="inline ">{{ __('Hostname') }}</span>
                        </button>

                    </div>


                    <div class="relative table-cell h-12 overflow-hidden align-top">
                    
                        <button class="w-full h-full px-6 py-3 border-b border-gray-200 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider flex items-center focus:outline-none flex justify-center">
                            <span class="inline ">{{ __('Value') }}</span>
                        </button>

                    </div>

                    <div class="relative table-cell h-12 overflow-hidden align-top">
                    
                        <button class="w-full h-full px-6 py-3 border-b border-gray-200 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider flex items-center focus:outline-none flex justify-center">
                            <span class="inline ">{{ __('TTL (seconds)') }}</span>
                        </button>

                    </div>

                    <div class="relative table-cell h-12 overflow-hidden align-top">
                    
                        <button class="w-full h-full px-6 py-3 border-b border-gray-200 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider flex items-center focus:outline-none flex justify-center">
                            <span class="inline ">{{ __('Actions') }}</span>
                        </button>

                    </div>

                </div>
        
                @if( isset($records['response']) )
                    @foreach ($records['response'] as $key => $record)
                    <div class="table-row p-1 divide-x divide-gray-100">
                            <div class="px-6 py-2 whitespace-no-wrap text-sm leading-5 text-gray-900 table-cell text-left">
                                {{ $record['type'] }}
                            </div>
                            <div class="px-6 py-2 whitespace-no-wrap text-sm leading-5 text-gray-900 table-cell text-left">
                                {{ $record['hostname']}}
                            </div>
                            <div class="px-6 py-2 whitespace-no-wrap text-sm leading-5 text-gray-900 table-cell text-left">
                                {{ $record['value'] }}
                            </div>
                            <div class="px-6 py-2 whitespace-no-wrap text-sm leading-5 text-gray-900 table-cell text-left">
                                {{ $record['ttl'] }}
                            </div>
        
                            
                            <div class="px-6 py-2 whitespace-no-wrap text-sm leading-5 text-gray-900 table-cell text-left">
                            
                                @if( !empty($confirming) && $confirming['id'] == $record['id'] && $confirming['value'] == $record['value'])

                                <button wire:click="$emit('deleteRecord', '{{$record['hostname']}}', '{{$record['type']}}', '{{$record['ttl']}}', '{{$record['value']}}')" class="btn rounded text-white btn bg-red-500">Confirm Delete</button>

                                    <button wire:click="resetDelete" class="btn rounded  text-white btn bg-red-500">{{__('Reset')}}</button>

                                @elseif($deleting === $record['value'])
                                    <button disabled class='btn text-white bg-red-500'>Deleting</button>
                                @else

                                    @if($record['type'] !== 'NS')
                                        <button wire:click="confirmDelete('{{$record['id']}}', '{{$record['value']}}')" class="btn rounded text-white bg-red-500">Delete</button>
                                    @endif 
                            
                                @endif

                            </div>
                            

                        </div>
                    @endforeach

                @else 
                    <p class="p-3 text-lg text-gray-500">
                        {{__('No data was found.')}}
                    </p>
                @endif

                
        </div>
        
        </div>
    </div>

</div>