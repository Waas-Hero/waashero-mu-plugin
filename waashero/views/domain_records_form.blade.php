<div class="" id="create-domain-container">

  
    <div class="container rounded-lg shadow-lg bg-white max-w-screen p-4">
  
     
        <div x-data="{ openTab: 1 }" class="p-6">
            <ul class="flex border-b">
              <li @click="openTab = 1" :class="{ '-mb-px': openTab === 1 }" class="-mb-px mr-1">
                <a :class="openTab === 1 ? 'border-l border-t border-r rounded-t text-blue-700' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#a-record">
                  A
                </a>
              </li>
              <li @click="openTab = 2" :class="{ '-mb-px': openTab === 2 }" class="mr-1">
                <a :class="openTab === 2 ? 'border-l border-t border-r rounded-t text-blue-700' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#cname-record">CNAME</a>
              </li>
              <li @click="openTab = 3" :class="{ '-mb-px': openTab === 3 }" class="mr-1">
                <a :class="openTab === 3 ? 'border-l border-t border-r rounded-t text-blue-700' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#mx-record">MX</a>
              </li>
              <li @click="openTab = 4" :class="{ '-mb-px': openTab === 4 }" class="mr-1">
                <a :class="openTab === 4 ? 'border-l border-t border-r rounded-t text-blue-700' : 'text-blue-500 hover:text-blue-800'" class="bg-white inline-block py-2 px-4 font-semibold" href="#txt-record">TXT</a>
              </li>
            </ul>
            <div class="w-full pt-4">
        
              <div x-cloak x-show="openTab === 1">
                <form wire:submit.prevent="createRecord" autocomplete="off" class="flex items-end form-inline mt-4 record-form">
              
                    <div class="flex flex-col mr-3">
                        <label for="domain-hostname-a" class="">Hostname</label>
                        <input wire:model="hostname" name="hostname" type="text" placeholder="Use @ or hostname" class="border py-2 px-3 text-grey-darkest"  id="domain-hostname-a" required>
                    </div>
                  <div class="flex flex-col mr-3">
                      <label for="servers-list-a" class="">Will Direct To</label>
          
                      <input wire:model="hostname" name="value" type="text" placeholder="Server IP or hostname" class="form-control wh-form-control hostname-value-input"  id="domain-value-a" required>
          
                  </div>
              
                  <div class="flex flex-col mr-3">
                    <label for="domain-email-a" class="">TTL (seconds)</label>
                    <input wire:model="ttl" name="ttl" type="text" placeholder="Enter the TTL in seconds" value="3600" class="form-control wh-form-control" id="domain-email-a" required>
                </div>
               
                  <div class="flex flex-col mr-3">
                    <button wire:click="changeType('A')" type="submit" class="btn bg-blue-600 text-white rounded py-2 px-3">Create Record</button>
                  </div>
                
                  <div class="hostname-txt text-muted col"></div>
                
                  </form>
              </div>
        
              <div x-cloak x-show="openTab === 2">
                <form wire:submit.prevent="createRecord" autocomplete="off" class="flex items-end form-inline mt-4 record-form">
                    @csrf
                  <div class="flex flex-col mr-3">
                      <label for="record-cname" class="">CNAME</label>
                      <input wire:model="hostname" name="hostname" type="text" placeholder="Enter CNAME" class="form-control wh-form-control hostname-input" id="record-cname" required>
                  </div>
              
                  <div class="flex flex-col mr-3">
                      <label for="record-value" class="">IS AN ALIAS OF</label>
                      <input wire:model="value" name="value" type="text" placeholder="Enter @ or hostname" class="form-control wh-form-control" id="record-value" required>
                  </div>
              
                  <div class="flex flex-col mr-3">
                    <label for="record-ttl" class="">TTL (seconds)</label>
                    <input wire:model="ttl" name="ttl" type="text" placeholder="Enter the TTL in seconds" value="4200" class="form-control wh-form-control" id="record-ttl" required>
                  </div>
               
                  <div class="flex flex-col mr-3">
                    <button wire:click="changeType('CNAME')"  type="submit"  class="btn bg-blue-600 text-white rounded rounded py-2 px-3">Create Record</button>
                  </div>
                          
                  <div class="hostname-txt text-muted col"></div>
              
                  </form>
              </div>
        
              <div x-cloak x-show="openTab === 3">
                <form wire:submit.prevent="createRecord" autocomplete="off" class="flex items-end form-inline mt-4 record-form">
                    
              
                    <div class="flex flex-col mr-3">
                        <label for="domain-domain-mx" class="">Hostname</label>
                        <input wire:model="hostname" name="hostname" type="text" placeholder="Enter @ or hostname" class="form-control wh-form-control hostname-input" id="domain-domain-mx" required>
                    </div>
              
                    <div class="flex flex-col mr-3">
                        <label for="domain-prov-mx" class="">Mail Providers Mail Server</label>
                        <input  wire:model="value" name="value" type="text" placeholder="e.g. aspmx.l.google.com" class="form-control wh-form-control" id="domain-prov-mx" required>
                    </div>
          
                    <div class="flex flex-col mr-3">
                      <label for="domain-priority-mx" class="">Priority</label>
                      <input name="priority" type="text" placeholder="e.g. 10" class="form-control wh-form-control" id="domain-priority-mx" required>
                    </div>
                
                    <div class="flex flex-col mr-3">
                      <label for="domain-ttl-mx" class="">TTL (seconds)</label>
                      <input wire:model="ttl" name="ttl" type="text" placeholder="Enter the TTL in seconds" value="14400" class="form-control wh-form-control" id="domain-ttl-mx" required>
                    </div>
                
                    <div class="flex flex-col">
                      <button wire:click="changeType('MX')"  type="submit"  class="btn bg-blue-600 text-white rounded rounded py-2 px-3">Create Record</button>
                    </div>
                          
                    <div class="hostname-txt text-muted col"></div>
              
                  </form>
              </div>
        
              <div x-cloak x-show="openTab === 4">
                <form wire:submit.prevent="createRecord" autocomplete="off" class="flex items-end form-inline mt-4 record-form">
                    
                    <div class="flex flex-col mr-3">
                      <label for="domain-txt" class="">Value</label>
                      <input wire:model="value" name="value" type="text" placeholder="Paste TXT string here" class="form-control wh-form-control hostname-input" id="domain-txt" required>              
                    </div>
          
                    <div class="flex flex-col mr-3">
                        <label for="domain-host-txt" class="">Hostname</label>
                        <input wire:model="hostname" name="hostname" type="text" placeholder="Enter @ or hostname" class="form-control wh-form-control hostname-input" id="domain-host-txt" required>  
                    </div>
              
                    <div class="flex flex-col mr-3">
                      <label for="domain-email-txt" class="">TTL (seconds)</label>
                      <input wire:model="ttl" name="ttl" type="text" placeholder="Enter the TTL in seconds" value="3600" class="form-control wh-form-control" id="domain-email-txt" required>
                    </div>
                
                    <div class="flex flex-col mr-3">
                      <button wire:click="changeType('TXT')" type="submit"  class="btn bg-blue-600 text-white rounded rounded py-2 px-3">Create Record</button>
                    </div>
                        
                    <div class="hostname-txt text-muted col"></div>
                
                  </form>
              </div>
        
            </div>
          </div>
  
    
    </div>

  
</div>