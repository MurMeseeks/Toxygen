updateBasket();

let products = document.getElementsByClassName("product");
let addToCart = document.getElementsByClassName("add_to_cart");
let basket = document.getElementById("basket");

for (let i = 0; i < products.length; i++) {
	products[i].addEventListener("mouseover", function() {
		products[i].children[0].classList.add("animate")
	}, false)
	products[i].addEventListener("mouseout", function() {
		products[i].children[0].classList.remove("animate")
	}, false)
}

function openNav() {
	document.getElementById("basket-slide").style.width = "500px";
	document.getElementById("basket-slide").style.padding = "20px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
	document.getElementById("basket-slide").style.width = "0";
	document.getElementById("basket-slide").style.padding = "0";
}

function setAttributes(el, attrs) {
	for(var key in attrs) {
		el.setAttribute(key, attrs[key]);
	}
}

function increment(elem) {
	let id = elem.dataset.id;
	let cart = JSON.parse(window.localStorage.getItem("cart"));
	for (let i = 0; i < cart.length; i++) {
		if (cart[i].id === id && cart[i].amount > 0) {
			console.log(cart[i]);
			let newElem = {
				id: cart[i].id,
				name: cart[i].name,
				amount: cart[i].amount - 1,
				count: cart[i].count + 1,
				cost: cart[i].cost,
				total: cart[i].cost * (cart[i].count + 1)
			}
			cart.splice(i, 1, newElem);
		}
	}
	window.localStorage.setItem("cart", JSON.stringify(cart));
	updateBasket();
}

function decrement(elem) {
	let id = elem.dataset.id;
	let cart = JSON.parse(window.localStorage.getItem("cart"));
	for (let i = 0; i < cart.length; i++) {
		if (cart[i].id === id && cart[i].count > 0) {
			let newElem = {
				id: cart[i].id,
				name: cart[i].name,
				amount: cart[i].amount + 1,
				count: cart[i].count - 1,
				cost: cart[i].cost,
				total: cart[i].cost * (cart[i].count - 1)
			}
			if (cart[i].count - 1 == 0) {
				cart.splice(i, 1);
			}
			else
				cart.splice(i, 1, newElem);
		}
	}
	window.localStorage.setItem("cart", JSON.stringify(cart));
	getSum();
	updateBasket();
}

function getSum() {
	let totalSum = document.getElementById("total");
	let summ = 0;
	if (window.localStorage.getItem("cart") != null) {
		let cart = JSON.parse(window.localStorage.getItem("cart"));
		for (let i = 0; i < cart.length; i++) {
			summ += Number(cart[i].total);
		}
	}
	totalSum.innerText = summ;
}
function updateBasket() {
	if (window.localStorage.getItem("cart") != null) {
		let cart = JSON.parse(window.localStorage.getItem("cart"));
		let bk = document.getElementById("bk-body")
		bk.innerHTML = "";
		for (let i = 0; i < cart.length; i++) {
			let row = bk.insertRow(i);
			let name = row.insertCell(0);
			let cost = row.insertCell(1);
			let count = row.insertCell(2);
			let total = row.insertCell(3);
			let inputName = document.createElement("input");
			let inputCost = document.createElement("input");
			let inputId = document.createElement("input");
			let inputCount = document.createElement("input");
			let inputTotal = document.createElement("input");
			let buttonDown = document.createElement("button");
			let buttonUp = document.createElement("button");
			// ИМЯ INPUT
			setAttributes(name, {"class": "td-name"})
			setAttributes(inputId, {"hidden": true, "value": cart[i].id})
			setAttributes(inputName, {"readonly": null, "class": "b-input input-name", "name": "animal-name", "type":"text", "value":cart[i].name});
			name.appendChild(inputName);
			name.appendChild(inputId);
			// СТОИМОСТЬ INPUT
			setAttributes(inputCost, {"readonly": null, "class": "b-input input-cost", "name": "animal-cost", "type":"text", "value":cart[i].cost});
			cost.appendChild(inputCost);
			// КОЛИЧЕСТВО INPUT
			setAttributes(inputCount, {"data-id": cart[i].id, "readonly": null, "class": "b-input input-count", "name": "animal-count", "type":"text", "value":cart[i].count});
			// КНОПКА БОЛЬШЕ
			setAttributes(buttonUp, {"data-id": cart[i].id, "class": "btn btn-default", "onClick": "increment(this)"})
			buttonUp.innerText = "+";
			// КНОПКА МЕНЬШЕ
			setAttributes(buttonDown, {"data-id": cart[i].id, "class": "btn btn-default", "onClick": "decrement(this)"})
			buttonDown.innerText = "-";
			// Присоединяем кнопки и инпут
			setAttributes(count, {"class": "flex-td"});
			count.appendChild(buttonDown);
			count.appendChild(inputCount);
			count.appendChild(buttonUp);
			// ИТОГО INPUT
			setAttributes(inputTotal, {"readonly": null, "class": "b-input input-total", "name": "animal-total", "type":"text", "value":cart[i].total});
			// ПРИСОЕДИНЯЕМ ТОТАЛ
			total.appendChild(inputTotal);
			getSum();
		}

	}
}

function addToLocalStorage(name, id, count, cost) {
	if (window.localStorage.getItem("cart") === null) {
		console.log("ADDING")
		let cart = [];
		let good = {
			"id": id,
			"name": name,
			"count": count,
			"cost": cost,
			"total": cost * count
		}
		cart.push(good);
		window.localStorage.setItem("cart", JSON.stringify(cart));
	}
}

for (let i = 0; i < addToCart.length; i++) {
	addToCart[i].addEventListener("click", function() {
		let amount = addToCart[i].parentNode.parentNode.parentNode.dataset.amount; // Получаем количество оставшихся товаров
		let name = addToCart[i].parentNode.parentNode.parentNode.dataset.name; // Получаем id товара
		let id = addToCart[i].parentNode.parentNode.parentNode.dataset.id; // Получаем id товара
		let cost = addToCart[i].parentNode.parentNode.parentNode.dataset.cost; // Получаем стоимость товара
		let count = 1; // Получаем количество товара
		let total = cost * count; // Получаем предварительную итоговую стоимость
		// Если localstorage (КОРЗИНА) пустая, создаем
		if (window.localStorage.getItem("cart") === null && amount > 0) {
			let cart = [];
			let good = {
				"name": name,
				"id": id,
				"count": 1,
				"cost": cost,
				"total": total * count,
				"amount": amount - 1
			}
			addToCart[i].parentNode.parentNode.parentNode.dataset.amount;
			amount -= 1;
			cart.push(good);
			window.localStorage.setItem("cart", JSON.stringify(cart));
			updateBasket();
		}
		// Если (КОРЗИНА) уже существует, пихаем в нее
		else if (amount > 0) {
			let cart = JSON.parse(window.localStorage.getItem("cart"));
			//Проверям есть ли текущий элемент в базе
			for (let i = 0; i < cart.length; i++) {
				if (cart[i].id === id) { // Если элемент есть
					if (cart[i].amount > 0) { // Если есть товар на складе
						count = Number(cart[i].count) + count; // Увеличиваем количество товара
						total = (Number(cart[i].cost) * count); // Увеличиваем итоговую стоимость товара
						amount = cart[i].amount
						cart.splice(i,1); // Удаляем найденный элемент
					}
					else {
						addToCart[i].parentNode.parentNode.parentNode.classList.add("fucked");
						return ; // Товара не осталось на складе
					}
				}
			}
			// Тоавара нет в корзине, добавляем новый
			let good = {
				"id": id,
				"name": name,
				"count": count,
				"cost": cost,
				"total": total,
				"amount": --amount
			}
			addToCart[i].parentNode.parentNode.parentNode.dataset.amount
			cart.push(good);
			window.localStorage.setItem("cart", JSON.stringify(cart));
			updateBasket();
		}
	})
}
