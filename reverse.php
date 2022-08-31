<?php


	class num {
		private $arr;

		public function addNum ($num) {
			$arr[] = $num;
		}

		public function getSum ($chankSquare, $chankCube) {
			return $chankSquare + $chankCube;
		};

		public function getSquare ($arr, $num, $chankSquare) {
			foreach ($arr as $key => $value) {
				$chankSquare += $value * $value;
			}
			return $chankSquare;
		};

		public function getCube ($arr, $num, $chankCube) {
			foreach ($arr as $key => $value) {
				$chankCube +=$value * $value * $value;
			};
			return $chankCube;
		};
	};












