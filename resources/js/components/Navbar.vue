<template>
	<nav
		class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg"
	>
		<div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
			<div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
				<a
					class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-no-wrap uppercase text-white"
					href="/"
				>
					<img src="../../assets/img/logo.png" class="w-20" />
				</a>
			</div>
			<div
				class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none"
				v-bind:class="{'hidden': !showMenu, 'block': showMenu}"
			>
				<!-- <ul class="flex flex-col lg:flex-row list-none mr-auto">
					<li class="flex items-center">
						<a
							class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
							target="__blank"
							href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public"
						>
							<img src="../../assets/img/who.png" class="w-32 mr-2">
							WHO Advice for public
						</a>
					</li>
				</ul> -->
				<!-- <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
					<li class="flex items-center">
						<a
							class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
							target="__blank"
							href="https://www.instagram.com/aryanoblelife/"
						>
							<i class="lg:text-gray-300 text-gray-500 fab fa-instagram text-lg leading-lg"></i>
							<span class="lg:hidden inline-block ml-2">Instagram</span>
						</a>
					</li>
					<li class="flex items-center">
						<a
							class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
							href="#pablo"
						>
							<i class="lg:text-gray-300 text-gray-500 fab fa-facebook text-lg leading-lg"></i>
							<span class="lg:hidden inline-block ml-2">Facebook</span>
						</a>
					</li>
				</ul> -->
			</div>
		</div>
	</nav>
</template>
<script>
export default {
	data() {
		return {
			showMenu: false
		};
	},
	methods: {
		toggleNavbar: function() {
			this.showMenu = !this.showMenu;
		}
	}
};
</script>
