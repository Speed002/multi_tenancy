<x-layouts.app>
    <div class="row py-4 mb-3">
        <div class="col-sm-8">
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span class="slate">{{auth()->user()->email}} <br>
                    <span class="small slate-light">Messages from the website</span></span>
                  <div>
                    <span class="badge badge-sm text-bg-secondary">12</button>
                  </div>
                </li>
              </ul>
        </div>
        {{-- Empty space --}}
        <div class="col-sm-4">

        </div>
    </div>
</x-layouts.app>
