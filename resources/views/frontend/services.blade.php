<x-frontend-layout>

    {{-- PAGE HEADER — Layanan --}}
    <section
        style="position:relative;overflow:hidden;padding-top:120px;padding-bottom:96px;background:linear-gradient(135deg,#0b1c30 0%,#0F4C81 60%,#1470e8 100%);">

        {{-- Decorative blobs --}}
        <div style="position:absolute;inset:0;z-index:0;pointer-events:none;">
            <div
                style="position:absolute;top:-20%;right:-10%;width:500px;height:500px;background:rgba(20,112,232,0.25);border-radius:9999px;filter:blur(100px);">
            </div>
            <div
                style="position:absolute;bottom:-30%;left:-5%;width:400px;height:400px;background:rgba(15,76,129,0.4);border-radius:9999px;filter:blur(80px);">
            </div>
        </div>

        {{-- Geometric grid overlay --}}
        <div
            style="position:absolute;inset:0;z-index:0;opacity:0.06;pointer-events:none;background-image:linear-gradient(rgba(255,255,255,0.5) 1px,transparent 1px),linear-gradient(90deg,rgba(255,255,255,0.5) 1px,transparent 1px);background-size:48px 48px;">
        </div>

        <div class="cont" style="position:relative;z-index:10;text-align:center;">

            {{-- Badge --}}
            <div
                style="display:inline-flex;align-items:center;gap:8px;padding:6px 16px;background:rgba(255,255,255,0.12);border:1px solid rgba(255,255,255,0.2);color:#d8e2ff;border-radius:9999px;width:fit-content;margin:0 auto 24px;backdrop-filter:blur(8px);">
                <span class="material-symbols-outlined" style="font-size:16px;">build</span>
                <span class="t-label-caps" style="color:#d8e2ff;">Solusi Profesional</span>
            </div>

            {{-- Heading --}}
            <h1 class="text-4xl" style="color:#fff;margin-bottom:20px;">
                Layanan <span style="color:#d8e2ff;position:relative;">Kami
                    <span
                        style="position:absolute;bottom:-4px;left:0;right:0;height:3px;background:rgba(216,226,255,0.5);border-radius:9999px;"></span>
                </span>
            </h1>

            {{-- Subheading --}}
            <p class="t-body-lg" style="color:rgba(255,255,255,0.75);max-width:36rem;margin:0 auto 0;">
                Solusi lengkap untuk kebutuhan instalasi dan maintenance gedung Anda dengan standar kualitas tertinggi.
            </p>

        </div>
    </section>

    <!-- Services Grid -->
    <section class="bg-surf-low" style="padding-top:120px;padding-bottom:120px;">

        <style>
            .bg-surf-low {
                background-color: #eff4ff;
            }

            /* Card sama persis dengan home page */
            .svc-card {
                background: #fff;
                padding: 32px;
                border-radius: 16px;
                box-shadow: 0 1px 3px rgba(0, 0, 0, 0.08);
                transition: box-shadow 0.3s, transform 0.3s;
            }

            .svc-card:hover {
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
                transform: translateY(-8px);
            }

            .svc-card:hover .svc-icon {
                background: #0F4C81;
            }

            .svc-card:hover .svc-title {
                color: #0F4C81;
            }

            .svc-card:hover .svg-wrapper {}

            .svc-icon {
                transition: background 0.3s;
            }

            .svc-title {
                transition: color 0.3s;
            }

            .svg-wrapper {
                color: #0F4C81;
                transition: color 0.3s;
            }
        </style>

        <div style="max-width:1280px;margin:0 auto;padding:0 32px;">

            {{-- Section header (sama dengan home) --}}

            {{-- Grid cards --}}
            <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:32px;">
                @foreach($services as $service)
                    <div class="svc-card">

                        {{-- Icon wrapper --}}
                        <div class="svc-icon"
                            style="width:64px;height:64px;background:rgba(15,76,129,0.05);border-radius:12px;display:flex;align-items:center;justify-content:center;margin-bottom:24px;">
                            @php
                                $iconPath = public_path('icon/' . $service->icon);
                                $svgContent = '';
                                if (file_exists($iconPath)) {
                                    $svgContent = file_get_contents($iconPath);
                                    $svgContent = str_replace(['#000', '#000000', 'black'], 'currentColor', $svgContent);
                                }
                            @endphp
                            @if($svgContent)
                                <div class="svg-wrapper"
                                    style="width:32px;height:32px;display:flex;align-items:center;justify-content:center;">
                                    {!! $svgContent !!}
                                </div>
                            @else
                                <img src="{{ asset('icon/' . $service->icon) }}"
                                    style="width:32px;height:32px;object-fit:contain;" alt="">
                            @endif
                        </div>

                        <h3 class="svc-title"
                            style="font-size:24px;line-height:1.3;font-weight:700;color:#0b1c30;margin-bottom:16px;">
                            {{ $service->title }}
                        </h3>
                        <p style="color:#42474f;line-height:1.7;font-size:16px;">
                            {{ $service->description }}
                        </p>
                    </div>
                @endforeach
            </div>

            @if($services->isEmpty())
                <div style="text-align:center;padding:48px 0;">
                    <p style="color:#94a3b8;">Belum ada layanan yang tersedia saat ini.</p>
                </div>
            @endif

        </div>
    </section>

</x-frontend-layout>