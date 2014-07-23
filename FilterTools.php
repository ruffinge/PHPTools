<?php

/*
 * The MIT License
 *
 * Copyright 2014 Ethan Ruffing.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace Ruffing;

/**
 * Acts similarly to the built-in <code>filter_input</code>, but acts on the
 * <code>$_SESSION</code> superglobal array.
 *
 * @author Ethan Ruffing
 * @since 2014-07-18
 * @copyright (c) 2014, Ethan Ruffing
 * @license http://opensource.org/licenses/MIT The MIT License
 *
 * @param string $index
 * @return mixed If the specified index does exist in the <code>$_SESSION</code>
 *     superglobal array, this function will return the element at that index.
 *     Otherwise, it will return <code>null</code>.
 */
function filter_session($index) {
	$v = isset($_SESSION[$index]) ? $_SESSION[$index] : null;

	return $v;
}
