<template>
	<footer class="relative bg-footer pt-8 pb-6">
		<div
			class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
			style="height: 80px; transform: translateZ(0px);"
		>
			<svg
				class="absolute bottom-0 overflow-hidden"
				xmlns="http://www.w3.org/2000/svg"
				preserveAspectRatio="none"
				version="1.1"
				viewBox="0 0 2560 100"
				x="0"
				y="0"
			>
				<polygon class="text-footer fill-current" points="2560 0 2560 100 0 100" />
			</svg>
		</div>
		<div class="container mx-auto px-4">
			<div class="flex flex-wrap">
				<div class="w-full lg:w-6/12 px-4">
					<h4 class="text-3xl font-semibold text-white">Aryaners, yuk siaga COVID-19!</h4>
					<h5 class="text-lg mt-4 mb-2 text-white">
						<ul class="list-unstyled tracking-wide">
							<li>Jaga kesehatan & imun tubuh!</li>
							<li>Rajin cuci tangan & jaga kebersihan!</li>
							<li>Saring setiap berita (tolak HOAX)!</li>
							<li>Tetap siaga & jangan panik!</li>
						</ul>
					</h5>
					<div class="mt-6">
						<button
							class="bg-white text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
							type="button"
						>
							<a href="https://www.instagram.com/aryanoblelife/" target="__blank">
								<i class="fab fa-instagram"></i>
							</a>
						</button>
					</div>
				</div>
				<div class="w-full lg:w-6/12 px-4 mt-8">
					
				</div>
			</div>
			<hr class="my-6 border-white" />
			<div class="flex flex-wrap items-center md:justify-between justify-center">
				<div class="w-full md:w-4/12 px-4 mx-auto text-center">
					<div class="text-sm text-white font-light py-1">Tim Satgas P3DC Arya Noble Group {{date}}</div>
				</div>
			</div>
		</div>
	</footer>
</template>
<script>
export default {
	data() {
		return {
			date: new Date().getFullYear()
		};
	}
};
</script>
